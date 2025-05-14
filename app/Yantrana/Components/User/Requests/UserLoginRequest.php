<?php

/**
 * UserLoginRequest.php - Request file
 *
 * This file is part of the User component.
 *-----------------------------------------------------------------------------*/

namespace App\Yantrana\Components\User\Requests;

use Illuminate\Foundation\Http\FormRequest;
class UserLoginRequest extends FormRequest
{
    /**
     * Secure form.
     *------------------------------------------------------------------------ */
    protected $securedForm = true;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     *-----------------------------------------------------------------------*/
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the user login request.
     *
     * @return bool
     *-----------------------------------------------------------------------*/
   

      public function rules(): array
    {
        return [
            'email_or_username' => 'required|email',
            'password' => 'required|min:6',


        ];
    }

 
}
