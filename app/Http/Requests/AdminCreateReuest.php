<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCreateReuest extends FormRequest
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
            'email' =>'required | email',
            'password' => 'required | min:8',
            
        ];
    }

    public function message(){
        return [
            'email.required'=>'Bạn chưa nhập Email',
            'password.required'=>'Bạn chưa nhập password'
        ];
    }
}