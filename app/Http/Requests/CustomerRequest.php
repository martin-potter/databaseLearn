<?php

namespace App\Http\Requests;

use App\Models\Customer;
use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            case 'PUT': return [
                Customer::NAME => 'required|alpha_dash|max:255',
                Customer::CITY => 'alpha_dash|max:255|nullable',
                Customer::VISITS_MADE => 'numeric|max:2147483647|min:0',
                Customer::LAST_VISIT_TIME => 'date|nullable',
            ];
            case 'POST': return [
                Customer::NAME => 'alpha_dash|max:255',
                Customer::CITY => 'alpha_dash|max:255|nullable',
                Customer::VISITS_MADE => 'numeric|max:2147483647|min:0',
                Customer::LAST_VISIT_TIME => 'date|nullable',
            ];
            default:
                return[];
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
            'regex' => ':attribute 不符合要求'
        ];

    }

    public function attributes()
    {
        return [
            Customer::NAME => '客户 名称',
            Customer::CITY => '城市',
            Customer::VISITS_MADE => '购买次数',
            Customer::LAST_VISIT_TIME => '最后购买时间',
        ];
    }
}
