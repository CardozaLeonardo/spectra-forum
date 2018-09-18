<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|string|max:40',
            'email' => 'required|string|email|max:80',
            'password' => 'required|string|max:80',
            'name' => 'required|string|max:255'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function messages()
    {
        return [
            'username.required' => 'Se necesita un username',
            'email.required' => 'Se necesita un correo electrónico'
        ];
    }
}
