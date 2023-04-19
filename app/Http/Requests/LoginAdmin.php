<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginAdmin extends FormRequest
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
            'sdt'     =>  'required|digits:10|exists:adminSNDGs,sdt',
            'password'  =>  'required',
        ];
    }
    public function messages()
    {
        return [
            'sdt.required'     =>  "Bạn chưa điền Số điện thoại",
            'sdt.digits'     =>  "Số điện thoại ko hợp lệ",
            'sdt.exits'     =>  "Số điện thoại ko tồn tại",
            'password.exits'     =>  "Mật khẩu không đúng",
            'password.required'  =>  'Bạn chưa nhập mật khẩu',
        ];
    }
}
