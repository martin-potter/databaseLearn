<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        switch ($this->method()) {
            case 'PUT':
                return [
                    Product::NAME => 'alpha_dash|max:255|nullable',
                    Product::QOH => 'required|integer|max:2147483647|min:0',
                    Product::QOH_THRESHOLD => 'required|integer|max:2147483647|min:0',
                    Product::ORIGINAL_PRICE => 'numeric|max:1000000|min:0',
                    Product::DISCNT_RATE => 'numeric|min:0|max:1',
                    Product::SID => 'integer|exists:suppliers,id'
                ];
            case 'POST':
                return [
                    Product::NAME => 'required|alpha_dash|max:255|nullable',
                    Product::QOH => 'required|integer|max:2147483647|min:0',
                    Product::QOH_THRESHOLD => 'required|integer|max:2147483647|min:0',
                    Product::ORIGINAL_PRICE => 'numeric|max:1000000|min:0',
                    Product::DISCNT_RATE => 'numeric|min:0|max:1',
                    Product::SID => 'integer|exists:suppliers,id'
                ];
            default:
                return [];
        }
    }
    public function messages()
    {
        return [
            'alpha_dash' => ':attribute 只能是字符、数字或下划线',
            'required' => ':attribute 需要填写',
            'numeric' => ':attribute 必须是数字',
            'unique' => ':attribute 已经被占用，请更换',
            'max' =>  ':attribute 超过:max个字符限制',
            'exists' => ':attribute 不存在'
        ];

    }

    public function attributes()
    {
        return [
            Product::NAME => '产品名称',
            Product::QOH => '存储数量',
            Product::QOH_THRESHOLD => '补货门槛',
            Product::ORIGINAL_PRICE => '原始价格',
            Product::DISCNT_RATE => '折扣率',
            Product::SID => '供应商'
        ];
    }
}
