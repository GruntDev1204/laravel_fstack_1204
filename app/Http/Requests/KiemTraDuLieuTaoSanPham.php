<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KiemTraDuLieuTaoSanPham extends FormRequest
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
            'ten_san_pham'         =>   'required|max:100|unique:san_phams,ten_san_pham',
            'slug_san_pham'        =>   'required|unique:san_phams,slug_san_pham',
            'gia_ban'              =>   'required|numeric',
            'gia_khuyen_mai'       =>  'required|numeric|lt:gia_ban',
            'anh_dai_dien'         =>   'required',
            'mo_ta_ngan'           =>   'required',
            'mo_ta_chi_tiet'       =>   'required',
            'id_danh_muc'          =>   'required|exists:danh_muc_san_phams,id',
            'is_open'              =>   'required|boolean',
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
            'numeric'       =>  ':attribute phải là số',
        ];
    }

    public function attributes()
    {
        return [
            'ten_san_pham'         =>   'Tên sản phẩm',
            'slug_san_pham'        =>   'Slug sản phẩm',
            'gia_ban'              =>   'Giá bán',
            'gia_khuyen_mai'       =>   'Giá khuyến mãi',
            'anh_dai_dien'         =>   'Ảnh đại diện',
            'mo_ta_ngan'           =>   'Mô tả ngắn',
            'mo_ta_chi_tiet'       =>   'Mô tả chi tiết',
            'id_danh_muc'          =>   'Danh mục',
            'is_open'              =>   'Tình trạng',
        ];
    }
}
