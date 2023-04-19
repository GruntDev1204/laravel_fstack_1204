<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createPeople extends FormRequest
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
            'email'             =>  'required|email|unique:people,email',
            'password'          =>  'required|min:6|max:50',
            'sdt'     =>  'required|digits:10|unique:people,sdt',
            're_password'       =>  'required|same:password',
            'birth'       =>  'required',
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
            'agree.accepted'   =>  'you must agree the rules',
        ];
    }

    public function attributes()
    {
        return [
            'birth'  =>  'birthDay',
            'ho_va_ten'         =>  'Họ và tên',
            'email'             =>  'Email',
            'password'          =>  'Mật khẩu',
            'sdt' => 'Phone Number',
            're_password'       =>  ' mật khẩu được nhập lại',
        ];
    }
}
