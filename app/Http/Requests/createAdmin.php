<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createAdmin extends FormRequest
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
            'ho_va_ten'     =>  'required',
            'sdt'     =>  'required|unique:admins,sdt',
            'password'  =>  'required',
            'ghi_chu' =>'required',
        ];
    }
    public function messages()
    {
        return [
            'ho_va_ten.required'     =>  "Bạn chưa điền Họ và Tên",
            'sdt.required'     =>  "Bạn chưa điền Số điện thoại",
            'password.required'  =>  'Bạn chưa nhập mật khẩu',
            'ghi_chu.required' =>'Hãy viết ghi chú!!',
        ];
    }
}
