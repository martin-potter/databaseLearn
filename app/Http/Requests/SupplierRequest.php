<?php

namespace App\Http\Requests;

use App\Models\Supplier;
use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
                Supplier::CITY => 'string|max:255|nullable',
                Supplier::NAME => 'required|string|max:255',
                Supplier::TELEPHONE => ['regex:/^[0-9]*$/','max:255']
            ];
            case 'POST': return [
                Supplier::CITY => 'alpha_dash|max:255|nullable',
                Supplier::NAME => 'required|alpha_dash|max:255|unique:suppliers',
                Supplier::TELEPHONE => ['regex:/^[0-9]*$/','max:255']
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
            Supplier::NAME => '供应商姓名',
            Supplier::CITY => '城市',
            Supplier::TELEPHONE => '联系电话'
        ];
    }
}
