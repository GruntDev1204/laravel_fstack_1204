<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class appBill extends FormRequest
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
            'name'         =>  'required|min:4|max:50',
            'price'     =>  'required|integer|numeric|min:4',
            'so_luong'             =>  'required|min: 1|integer',

        ];
    }
    public function messages()
    {
        return[
            'required'      =>  ':attribute chưa được điền',
            'min' => ':attribute quá thấp so với quy định',
            'max' => ':attribute quá nhiều',
            'numeric' => ':attribute phải là số',
            'integer' => ':attribute phải là số lớn hơn 0',


        ];
    }
    public function attributes()
    {
        return[
            'name'         =>  'Họ và tên',
            'price' => 'giá cả',
            'so_luong'=> 'số lượng',
        ];
    }
}
