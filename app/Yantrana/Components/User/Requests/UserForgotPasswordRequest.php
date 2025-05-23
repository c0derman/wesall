<?php

/**
 * UserLoginRequest.php - Request file
 *
 * This file is part of the User component.
 *-----------------------------------------------------------------------------*/

namespace App\Yantrana\Components\User\Requests;

use App\Yantrana\Base\BaseRequest;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserForgotPasswordRequest extends FormRequest
{
    /**
     * Authorization for request.
     *
     * @return bool
     *-----------------------------------------------------------------------*/
    public function authorize()
    {
        return true;
    }

    /**
     * Validation rules.
     *
     * @return bool
     *-----------------------------------------------------------------------*/
    public function rules()
    {
        if (getStoreSettings('allow_recaptcha')) {
            request()->validate(['g-recaptcha-response' => 'required'], [
                'g-recaptcha-response' => __tr('The recaptcha field is required.')
            ]);
        }
        return  [
            'email' => 'required|email',
        ];
    }
}
