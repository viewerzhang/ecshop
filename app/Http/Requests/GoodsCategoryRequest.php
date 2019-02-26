<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodsCategoryRequest extends FormRequest
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
          // "cate_pid" => "18"
          // "cate_sort" => null
          // "cate_name" => "111"
          // "cate_desc" => "1111"
        return [
            "cate_pid" =>'required',
            "cate_sort" =>'required',
            "cate_name" =>'required',
            "cate_desc" =>'required',
        ];
    }
    public function messages()
    {
        return [
            'cate_pid.required' => '父类ID不能为空',
            'cate_sort.required'  => '分类排序不能为空',
            'cate_name.required'  => '分类名称不能为空',
            'cate_desc.required'  => '分类描述不能为空',
        ];
    }
}
