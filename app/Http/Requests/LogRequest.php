<?php

namespace App\Http\Requests;

use App\Models\Log;
use Illuminate\Foundation\Http\FormRequest;

class LogRequest extends FormRequest
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
                    Log::WHO => 'integer|exists:employees,id',
                    Log::OPERATION => 'alpha_dash|max:255',
                    Log::TABLE_NAME => 'alpha_dash|max:255',
                    Log::TIME => 'date|nullable',
                    Log::KEY_VALUE => 'string|max:255|nullable'
                ];
            case 'POST':
                return [
                    Log::WHO => 'required|integer|exists:employees,id',
                    Log::OPERATION => 'required|alpha_dash|max:255',
                    Log::TABLE_NAME => 'required|alpha_dash|max:255',
                    Log::TIME => 'required|date|nullable',
                    Log::KEY_VALUE => 'required|string|max:255|nullable'
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
            'max' =>  ':attribute 大于上限 :max',
            'exists' => ':attribute 不存在',
            'integer' => ':attribute 只能是整数',
            'min' => ':attribute 小于下限 :min'
        ];
    }

    public function attributes()
    {
        return [
            Log::WHO => '操作员',
            Log::OPERATION => '操作',
            Log::TABLE_NAME => '表名',
            Log::TIME => '记录时间',
            Log::KEY_VALUE => '记录值'
        ];
    }
}
