<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
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
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'username' => 'required|min:3|unique:users,username',
            'phone' => 'required|unique:users,phone|digits:10|numeric',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'firstname is Required',
            'firstname.min' => 'firsname minimum 3 character',
            'lastname.required' => 'name is Required',
            'lastname.min' => 'firsname minimum 3 character',
            'username.required' => 'username is Required',
            'username.min' => 'username minimum 3 character',
            'username.unique' => 'username already exists',
            'phone.required' => 'phone is required',
            'phone.unique' => 'phone already exist',
            'phone.length' => 'phone should be 10 charcter',
            'email.required' => 'email is Required',
            'email.unique' => 'email already exists',
            'password.required' => 'password is required',
            'password.min' => 'password minimum 6 character',
            'password.confirmed' => 'confirm password not matched',
        ];
    }
}