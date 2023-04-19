<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editNumber extends FormRequest
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
            'id'                =>  'required|exists:updated_numbers,id',
            'followers'      =>  'required',
            'nft'     =>  'required',
            'twitter'          =>  'required',
            'holders'          =>  'required',

        ];
    }
    public function messages()
    {
        return [
            'id.required' => "Chưa có id!!",
            'followers.required'  =>  "Vui lòng điền followers!!!",
            'nft.required'  =>  "Vui lòng điền nft!!!",
            'twitter.required'  =>  "Vui lòng điền twitter!!!",
            'holders.required'  =>  "Vui lòng điền holders!!!",
        ];
    }
}
