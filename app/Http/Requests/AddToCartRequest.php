<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddToCartRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'san_pham_id'   => 'required|exists:san_phams,id',
            'so_luong'      => 'required|numeric|min:1',
        ];
    }

    public function messages()
    {
        return [
            'required'      => ':attribute không được để trống',
            'exists'        => ':attribute không tồn tại',
            'numeric'       => ':attribute phải là số',
            'min'           => ':attribute phải lớn hơn 0',
        ];
    }

    public function attributes()
    {
        return [
            'san_pham_id'   => 'Sản phẩm',
            'so_luong'      => 'Số lượng',
        ];
    }
}
