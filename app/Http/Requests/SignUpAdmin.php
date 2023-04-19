<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpAdmin extends FormRequest
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
            'sdt'     =>  'required|digits:10|unique:adminSNDGs,sdt',
            'password'  =>  'required',
            'ghi_chu' =>'required',
            'agree'             =>  'accepted',
        ];
    }
    public function messages()
    {
        return [
            'ho_va_ten.required'     =>  "Bạn chưa điền Họ và Tên",
            'sdt.required'     =>  "Bạn chưa điền Số điện thoại",
            'sdt.digits'     =>  "Số điện thoại ko hợp lệ",
            'sdt.unique'     =>  "Số điện thoại của bạn đã tồn tại trong hệ thống",
            'password.required'  =>  'Bạn chưa nhập mật khẩu',
            'ghi_chu.required' =>'Hãy viết ghi chú!!',
            'agree.accepted'             =>  'Bạn phải đồng ý với điều khoản!',
        ];
    }
}
