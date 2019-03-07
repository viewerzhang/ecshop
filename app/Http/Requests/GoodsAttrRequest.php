<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodsAttrRequest extends FormRequest
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
            'type_id' => 'required|max:255',  
            'attr_name' => 'required|max:255',  
            'attr_value' => 'required|max:255',  

        ];
    }

    public function messages()
    {
        return [
            'type_id.required' => '所属商品分类必填',
            'attr_name.required' => '属性名称必填',
            'attr_value.required' => '属性值必填',
        ];
    }
}
