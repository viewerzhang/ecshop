<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodsRequest extends FormRequest
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
            'goods_name' => 'required|max:255',  
            'goods_title' => 'required|max:255',  
            'cate_id' => 'required',  
            'type_id' => 'required',  
            'brand_id' => 'required',   
            'markte_price' => 'required|regex:/^\d{1,}\.\d{2}$/',  
            'goods_price' => 'required|regex:/^\d{1,}\.\d{2}$/',  
            'click_num' => 'required|regex:/^\d{1,}$/',  
            'goods_weight' => 'required|regex:/^\d{1,}$/',  
            'goods_num' => 'required|regex:/^\d{1,}$/',  
            'goods_desc' => 'required',  

        ];
    }

    public function messages()
    {
        return [
            'goods_name.required' => '商品名称必填',  
            'goods_title.required' => '商品标语必填',  
            'cate_id.required' => '所属分类必填',  
            'type_id.required' => '所属类型必填',  
            'brand_id.required' => '所属品牌必填',  
            'markte_price.required'=> '市场价必填',  
            'markte_price.regex'=> '市场价必须为数字且小数点后保留两位',  
            'goods_price.required'=> '本店价必填',  
            'goods_price.regex'=> '本店价必须为数字且小数点后保留两位',  
            'click_num.required'=> '浏览量必填',  
            'goods_weight.required' => '商品重量必填',  
            'goods_weight.regex' => '商品重量需填写至少一位数字',  
            'goods_num.required' => '库存必填',  
            'goods_num.regex' => '库存需填写至少一位数字',  
            'goods_desc.required' => '商品详情必填',  

        ];
    }
}
