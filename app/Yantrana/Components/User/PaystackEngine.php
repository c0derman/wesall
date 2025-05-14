<?php

namespace App\Yantrana\Components\User;

use App\Yantrana\Base\BaseEngine;
use Hamcrest\Core\IsSame;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Yantrana\Components\User\Models\CreditWalletTransaction;
use App\Yantrana\Components\FinancialTransaction\Models\FinancialTransaction;
use App\Yantrana\Components\FinancialTransaction\Repositories\FinancialTransactionRepository;
use App\Yantrana\Components\CreditPackage\Repositories\CreditPackageRepository;
use App\Yantrana\Components\User\Repositories\CreditWalletRepository;


class PaystackEngine extends BaseEngine
{
    /**
     * @var  string $webhookSecret - stripe webhook secret
     */
    protected $webhookSecret;
    protected $initSetup;
    protected $paystackKey;
    protected $paystackSecret;

    /**
     * @var  CreditPackageRepository - CreditPackage Repository
     */
    protected $creditPackageRepository;

    /**
     * @var  CreditWalletRepository - CreditWallet Repository
     */
    protected $creditWalletRepository;

    /**
     * @var paymentUrl - paymentUrl
     */
    protected $paymentUrl;
    /**
     *
     * @var financialTransactionRepository - financialTransactionRepository
     */
    protected $financialTransactionRepository;

    /**
     * @var cryptoToken - coingateToken
     */
    protected $cryptoToken;
    /**
     * @var cryptoToken - coingateToken
     */
    protected $cryptoPaymentUrl;
     /**
     * @var cryptoToken - coingateToken
     */
    protected $cryptoSecretKey;

    /**
     * Constructor.
     * @param  CreditPackageRepository  $creditPackageRepository - CreditPackage Repository
     * @param  CreditWalletRepository  $creditWalletRepository - CreditWallet Repository
     * @param FinancialTransactionRepository - financialTransactionRepository
     *
     *-----------------------------------------------------------------------*/
    public function __construct(FinancialTransactionRepository $financialTransactionRepository, CreditWalletRepository $creditWalletRepository,CreditPackageRepository $creditPackageRepository)
    {
        if (getStoreSettings('use_test_paystack')) {
            $paystackKey = getStoreSettings('paystack_testing_publishable_key');
            $paystackSecret = getStoreSettings('paystack_testing_secret_key');

        } else {
            $paystackKey = getStoreSettings('paystack_live_publishable_key');
            $paystackSecret = getStoreSettings('paystack_live_secret_key');
        }
         //check paystack test mode is on
        
        $this->paystackKey = $paystackKey;
        $this->paystackSecret = $paystackSecret;
        $this->financialTransactionRepository = $financialTransactionRepository;
        $this->creditPackageRepository = $creditPackageRepository;
        $this->creditWalletRepository = $creditWalletRepository;
    }

  /**
     * This method use for capturing payment.
     *
     * @param  string  $paymentId
     * @return paymentReceived
     *---------------------------------------------------------------- */
    public function capturePaystackPayment($reference,$packageUid)
    {

        // Paystack secret key
        $paystackSecretKey = $this->paystackSecret; 

        if (!$reference) {
            return response()->json(['error' => 'Reference not provided'], 400);
        }
        // Call Paystack API to verify the transaction
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $paystackSecretKey,
        ])->get("https://api.paystack.co/transaction/verify/{$reference}");
        $transactionData = $response->json();

        if ($transactionData['status'] == 'true' && $transactionData['data']['status'] === 'success') {

            return $this->engineSuccessResponse([
                'capturedPaystackData' => $transactionData['data'],
                'txn_reference' => $transactionData['data']['reference'],
                'packageUid' => $packageUid,
            ], __tr('Payment successfully!'));
        } else {
            // Transaction failed
            return response()->json(['success' => false, 'message' => 'Payment failed.']);

        }
    }
      /**
     * get payment response by webhook
     *
     * @return  array
     *-------------------------------------*/
    public function paymentWebhook()
    {
        try {
            //    Paystack secret key
            $paystackSecretKey = $this->paystackSecret; 

            // Retrieve the request's body
            $input = @file_get_contents("php://input");
            $sig_header = $_SERVER['HTTP_X_PAYSTACK_SIGNATURE'];
            // validate event do all at once to avoid timing attack
            if ($sig_header== hash_hmac('sha512', $input, $paystackSecretKey)) {
                 // parse event (which is json string) as object
            // Do something - that will not take long - with $event
            $data = json_decode($input, true);
        
            $event = $data['event'] ?? null;
            if ($event === 'charge.success') {
                $transactionData = $data['data'];
                return $this->engineSuccessResponse(['transactionData' =>
                    $transactionData,
                ]);

            } else {
                return response()->json(['error' => 'Unhandled Paystack Event' . $event], 400);

            }
            }
        } catch (\Exception $e) {
              // Invalid signature
              __logDebug('Webhook Error', ['message' => $e->getMessage()]);
            return response()->json(['error' => 'Server error'], 500);
        }

    }

    /**
     * store paystack payment.
     *
     * @param  string  $orderId
     *
     *---------------------------------------------------------------- */

     public function processPaystackStoreData($inputData)
     {
        $packageUid=$inputData['capturedPaystackData']['metadata']['package_uid'];
        $reference=$inputData['txn_reference'];
        $userID= $inputData['capturedPaystackData']['metadata']['userId'];

        //fetch package data
       $packageCollection = $this->creditPackageRepository->fetch($packageUid);
        //check package is available
      if ( __isEmpty($packageCollection)) {
          //success function
          return $this->engineReaction(2, null,  __tr('Package does not exist.'));
      }
       if ($this->creditWalletRepository->isAlreadyProcessed($reference)) {

          return $this->engineReaction(1, null,  __tr('Already been processed'), 200);
      }
       //crypto test mode
       $isPaystackTestMode = 1;
       //fetch crypto test keys
       if (!getStoreSettings('use_test_paystack')) {
           $isPaystackTestMode = 2;
       }
      $packageAmount=$packageCollection['price'];
      //prepare transaction storedata
      $storeData = [
          'status' => 2,
          'amount' => $packageAmount,
          'users__id' => $userID,
          'method' => configItem('payments.payment_methods', 8),
          'currency_code' => getStoreSettings('currency_value'),
          'is_test' => $isPaystackTestMode,
          'txn_id' => $reference,
          '__data' => [
              'rawPaymentData' =>json_encode($inputData),
              'packageName' => $packageCollection['title'],
          ],
      ];

          //made new function for getting order id
          if ( $this->creditWalletRepository->storeTransaction($storeData, $packageCollection)) {

                return $this->engineReaction(1, null,  __tr('Payment Complete'), 200);
              }

      return $this->engineFailedResponse(['show_message' => true], __tr('Purchased failed'));
    }


}


