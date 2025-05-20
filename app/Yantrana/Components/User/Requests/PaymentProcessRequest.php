<?php

/**
 * PaymentProcessRequest.php - Request file
 *
 * This file is part of the User component.
 *-----------------------------------------------------------------------------*/

namespace App\Yantrana\Components\User\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class PaymentProcessRequest extends FormRequest
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
        return [];
    }
}
