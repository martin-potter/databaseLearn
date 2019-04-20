<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
                Employee::CITY => 'alpha_dash|max:255|nullable',
                Employee::NAME => 'alpha_dash|max:255|nullable'
            ];
            case 'POST': return [
                Employee::CITY => 'required|alpha_dash|max:255',
                Employee::NAME => 'required|alpha_dash|max:255'
            ];
            default:
                return[];
        }
    }

    public function messages()
    {
        return [
            'alpha_dash' => ':attribute 只能是字符、数字或下划线',
            'required' => ':attribute 需要填写'
        ];

    }

    public function attributes()
    {
        return [
            Employee::NAME => '员工姓名',
            Employee::CITY => '城市'
        ];
    }
}
