<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAnimationRequest extends FormRequest
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
            'name'=>'required|string|min:2|max:200',
            'type'=>'nullable',
            'orign'=>'required|string|min:2|max:200',
            'dir'=>'required|string|min:2|max:200',
            'ep_num'=>'required|numeric|min:1',
            'cp_id'=>'required',
            'play_time'=>'nullable',
        ];
    }
    public function messages()
{
    return[
        "name.required" => "動畫名稱為「必填」項目",
        "name.min" => "動畫名稱至少2個字元",
        "orign.required" => "原作者為「必填」項目",
        "orign.min"=>"原作者名稱至少2個字元",
        "dir.required" => "導演名為「必填」項目",
        "dir.min" => "導演名稱至少2個字元",
        "ep_num.required" => "集數為「必填」項目",
        "ep_num.min" => "集數至少1集以上",
        "cp_id.required" => "公司編號為「必填」項目"
    ];
  }
}

