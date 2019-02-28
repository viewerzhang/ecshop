<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginDologinRequest extends FormRequest
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
            'user_name' => 'required',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'user_name.required' => '用户名不能为空',
            'password.required' => '密码不能为空',
            'user_phone.required' => '手机号不能为空',
            'yzm.required' => '验证码不能为空',
        ];
    }
}
