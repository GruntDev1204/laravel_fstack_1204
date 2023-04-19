<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTimeline extends FormRequest
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
            'id' => 'required|exists:timelines,id',
            'week'      =>  'required',
            'line_one'     =>  'required',
            'line_two'          =>  'required',
            'line_three'          =>  'required',
            'line_four'          =>  'required',
            'line_five'          =>  'required',
            'is_line_one' => 'boolean',
            'is_line_two' => 'boolean',
            'is_line_three' => 'boolean',
            'is_line_four' => 'boolean',
            'is_line_five' => 'boolean',
        ];
    }
    public function messages()
    {
        return [
            'id.required' => "Chưa có id",
            'week.required'  =>  "Vui lòng điền tuần!!!",
            'line_one.required'  =>  "Vui lòng điền p1!!!",
            'line_two.required'  =>  "Vui lòng điền p2!!!",
            'line_three.required'  =>  "Vui lòng điền p3!!!",
            'line_four.required'  =>  "Vui lòng điền p4!!!",
            'line_five.required'  =>  "Vui lòng điền p5!!!",
            'is_line_one.boolean'  =>  "chỉ đc true false 1!!!",
            'is_line_three.boolean'  =>  "chỉ đc true false 3!!!",
            'is_line_two.boolean'  =>  "chỉ đc true false 2!!!",
            'is_line_four.boolean'  =>  "chỉ đc true false 3!!!",
            'is_line_five.boolean'  =>  "chỉ đc true false 2!!!",
        ];
    }
}
