<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:200',
            'create' => 'nullable',
            'founder' => 'nullable|string|min:2|max:200',
            'head' => 'nullable|string|min:2|max:200',
            'address' => 'nullable'
        ];    

    }

    public function messages()
    {
        return [
            "name.required" => "公司名稱為「必填」項目",
            "founder.min" => "創辦人必須至少2個字元",
            "head.min" => "總部地址必須至少2個字元"
        ];
    }
}
