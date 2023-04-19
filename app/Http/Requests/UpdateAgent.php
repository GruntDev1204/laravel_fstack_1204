<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgent extends FormRequest
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

    public function rules()
    {
        return [
            'id'                 => 'required|exists:agents,id',
            'ho_va_ten'         =>  'required|min:4|max:50',
            'so_dien_thoai'     =>  'required|digits:10|unique:agents,so_dien_thoai'. $this->id,
            'email'             =>  'required|email|unique:agents,email'. $this->id,
            'password'          =>  'required|min:6|max:50',
            're_password'       =>  'required|same:password',
            'dia_chi'           =>  'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'required'      =>  ':attribute không được để trống',
            'max'           =>  ':attribute quá dài',
            'min'           =>  ':attribute quá ngắn',
            'exists'        =>  ':attribute không tồn tại',
            'boolean'       =>  ':attribute chỉ được chọn True/False',
            'unique'        =>  ':attribute đã tồn tại',
            'same'          =>  ':attribute và mật khẩu không giống',
            'digits'        =>  ':attribute phải là 10 sô',
        ];
    }
    public function attributes()
    {
        return [
            'ho_va_ten'         =>  'Họ và tên',
            'so_dien_thoai'     =>  'Số điện thoại',
            'email'             =>  'Email',
            'password'          =>  'Mật khẩu',
            're_password'       =>  'Nhập lại mật khẩu',
            'dia_chi'           =>  'Địa chỉ',
        ];
    }
}
