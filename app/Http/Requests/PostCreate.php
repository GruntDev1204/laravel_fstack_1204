<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreate extends FormRequest
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
            'content'   =>  'required',
            'action'           =>  'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'required'      =>  ':attribute you have not filled in',
            'boolean'       =>  ':attribute only 2 values',
        ];
    }

    public function attributes()
    {
        return [
            'content'      =>  ' the content',
            'action'     =>  'action',
        ];
    }
}
