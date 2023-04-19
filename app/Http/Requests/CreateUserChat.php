<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserChat extends FormRequest
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
            'full_name'         =>  'required|min:4|max:50',
            'sdt'     =>  'required|digits:10|unique:user_chats,sdt',
            'password'          =>  'required|min:6|max:50',
        ];
    }
    public function messages()
    {
        return [
            'required'      =>  ':attribute không được để trống',
            'max'           =>  ':attribute quá dài',
            'min'           =>  ':attribute quá ngắn',
            'unique'        =>  ':attribute đã tồn tại',
            'digits'        =>  ':attribute phải là 10 sô',
        ];
    }

    public function attributes()
    {
        return [
            'full_name'         =>  'Họ và tên',
            'sdt'     =>  'Số điện thoại',
            'email'             =>  'Email',
            'password'          =>  'Mật khẩu',
        ];
    }
}
