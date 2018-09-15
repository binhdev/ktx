<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest {

    /**
     * Description
     * @return type
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|string|unique:users|email|max:100',
            'name' => 'required|string|unique:users|max:100',
            'password' => 'required|string|min:8',
            'role' => 'required|string|min:3'
        ];
    }
}
