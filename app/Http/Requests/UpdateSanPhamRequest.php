<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSanPhamRequest extends FormRequest
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
            'id'                =>  'required|exists:san_phams,id',
            'ten_san_pham'      =>  'required|max:50|unique:san_phams,ten_san_pham,'. $this->id,
            'slug_san_pham'     =>  'required|max:50|unique:san_phams,ten_san_pham,'. $this->id,
            'gia_ban'           =>  'nullable|numeric',
            'gia_khuyen_mai'    =>  'required|numeric|lt:gia_ban',
            'anh_dai_dien'      =>  'required',
            'mo_ta_ngan'        =>  'required|max:500',
            'mo_ta_chi_tiet'    =>  'required',
            'id_danh_muc'       =>  'required|exists:danh_muc_san_phams,id',
            'is_open'           =>  'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'required'      =>  ':attribute không được để trống',
            'max'           =>  ':attribute quá dài',
            'exists'        =>  ':attribute không tồn tại',
            'boolean'       =>  ':attribute chỉ được chọn Hiển thị/Tạm tắt',
            'unique'        =>  ':attribute đã tồn tại',
            'numeric'       =>  ':attribute phải là số',
            'lt'            =>  ':attribute phải nhỏ hơn giá bán',
        ];
    }

    public function attributes()
    {
        return [
            'id'                =>  'Sản phẩm',
            'ten_san_pham'      =>  'Tên sản phẩm',
            'slug_san_pham'     =>  'Slug sản phẩm',
            'so_luong'          =>  'Số lượng',
            'gia_ban'           =>  'Giá bán',
            'gia_khuyen_mai'    =>  'Giá khuyến mãi',
            'anh_dai_dien'      =>  'Ảnh đại diện',
            'mo_ta_ngan'        =>  'Mô tả ngắn',
            'mo_ta_chi_tiet'    =>  'Mô tả chi tiết',
            'id_danh_muc'       =>  'Danh mục',
            'is_open'           =>  'Tình trạng',
        ];
    }
}
