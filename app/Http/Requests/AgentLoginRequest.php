<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentLoginRequest extends FormRequest
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
            'email'     =>  'required',
            'password'  =>  'required',
        ];
    }
    public function messages()
    {
        return [
            'email.required'     =>  "Bạn chưa nhập Email!",
            'password.required'  =>  "Bạn chưa nhập Mật Khẩu!",
        ];

    }
}
