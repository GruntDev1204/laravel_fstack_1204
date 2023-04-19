<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newStr extends FormRequest
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
            'id'                =>  'required|exists:the_stories,id',
            'title'      =>  'required',
            'content'     =>  'required',
        ];
    }
    public function messages()
    {
        return[
            'id.required' => "Chưa có id!!",
            'title.required'  =>  "Vui lòng điền tiêu đề!!!",
            'content.required'  =>  "Vui lòng điền nội dung!!!",
        ];
    }
}
