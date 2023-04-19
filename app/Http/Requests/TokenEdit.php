<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TokenEdit extends FormRequest
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
            'id'                 => 'required|exists:charts,id',
            'content'         =>  'required',
            'writer'     =>  'required',
        ];
    }
    public function messages()
    {
        return [
            'required'      =>  ':attribute  vui lòng điền vào!',
            'exists'        =>  ':attribute không tồn tại',
        ];
    }
    public function attributes()
    {
        return [
            'id'         =>  'id',
            'content'     =>  'Nội dung',
            'writer'             =>  'Tên người viết',
        ];
    }
}
