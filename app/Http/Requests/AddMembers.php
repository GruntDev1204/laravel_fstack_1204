<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddMembers extends FormRequest
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
            'fullname'      =>  'required|max:20',
            'desJob'     =>  'required',
            'sex'     =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required'  =>  "Vui lòng điền đầy đủ họ và tên thành viên!!!",
            'desJob.required'  =>  "Bạn chưa điền mô tả Job của thành viên !!!",
            'fullname.max'  =>  "Họ và tên không quá 20 kí tự",
            'sex.required'  =>  "giới tính chưa được điền",
            'sex.boolean'  =>  "giới tính chỉ được để 1 giá trị",
        ];
    }
}
