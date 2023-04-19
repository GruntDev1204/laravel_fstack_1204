<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeInfoAdmin extends FormRequest
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
            'id'     =>  'required|exists:adminSNDGs,id',
            'ho_va_ten'     =>  'required',
            'sdt'     =>  'required|digits:10|exists:adminSNDGs,sdt',

        ];
    }
    public function messages()
    {
        return [
            'id.required'     =>  "Không có tồn tại!",
            'id.exists'     =>  "Không có tồn tại!",
            'ho_va_ten.required'     =>  "Bạn chưa điền Họ và Tên",
            'sdt.required'     =>  "Bạn chưa điền Số điện thoại",
            'sdt.digits'     =>  "Số điện thoại ko hợp lệ",
            'sdt.exists'     =>  "Số điện thoại kHông tồn tại",
        ];
    }
}
