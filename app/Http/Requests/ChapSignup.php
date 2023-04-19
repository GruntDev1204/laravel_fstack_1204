<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChapSignup extends FormRequest
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
            'ho_va_ten'         =>  'required|min:4|max:50',
            'so_dien_thoai'     =>  'required|digits:10|unique:chaps,so_dien_thoai',
            'email'             =>  'required|email|unique:chaps,email',
            'password'          =>  'required|min:6|max:50',
            're_password'       =>  'required|same:password',
            'dia_chi'           =>  'required|min:6',
            'agree'             =>  'accepted',
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
            'agree.accepted'   =>  'Bạn phải đồng ý điều khoản!',
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
