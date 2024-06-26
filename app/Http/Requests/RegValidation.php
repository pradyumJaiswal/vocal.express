<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'email' => 'email|required|unique:users',
            'user_name' =>'required|min:3|unique:users',
            'password' =>'required|min:6'
        ];
    }
}
