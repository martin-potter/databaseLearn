<?php

namespace App\Http\Requests;

use App\Models\Purchase;
use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
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
                    Purchase::EID => 'integer|exists:employees,id',
                    Purchase::CID => 'integer|exists:customers,id',
                    Purchase::PID => 'integer|exists:products,id',
                    Purchase::TOTAL_PRICE => 'numeric|min:0|max:1000000',
                    Purchase::PTIME => 'date|nullable',
                    Purchase::QTY => 'integer|min:0|max:2147483647|nullable'
                ];
            case 'POST':
                return [
                    Purchase::EID => 'required|integer|exists:employees,id',
                    Purchase::CID => 'required|integer|exists:customers,id',
                    Purchase::PID => 'required|integer|exists:products,id',
                    Purchase::TOTAL_PRICE => 'required|numeric|min:0|max:1000000',
                    Purchase::PTIME => 'required|date|nullable',
                    Purchase::QTY => 'required|integer|min:0|max:2147483647|nullable'
                ];
            default:
                return [];
        }
    }
    public function messages()
    {
        return [
            'required' => ':attribute 需要填写',
            'numeric' => ':attribute 必须是数字',
            'max' =>  ':attribute 大于上限 :max',
            'exists' => ':attribute 不存在',
            'integer' => ':attribute 只能是整数',
            'min' => ':attribute 小于下限 :min'
        ];
    }

    public function attributes()
    {
        return [
            Purchase::EID => '员工',
            Purchase::CID => '顾客',
            Purchase::PID => '产品',
            Purchase::TOTAL_PRICE => '总价格',
            Purchase::PTIME => '购买时间',
            Purchase::QTY => '购买数量'
        ];
    }
}
