<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd(Employee::all()->toArray());
        return view('homework2._list',[
            'title'=>'员工表 employee',
            'columns' => [
                Employee::NAME => '名称',
                Employee::CITY => '城市',
                Employee::CREATED_AT => '创建时间',
                Employee::UPDATED_AT => '修改时间',
            ],
            'data' => Employee::all()->toArray(),
            'create' => 'employee.create',
            'edit' => 'employee.edit',
            'delete' => 'employee.destroy'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homework2.edit_employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
         $employee = new Employee($request->validated());
         $employee->save();
         return redirect()->to(route('employee.index'))->with('success','新增成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        return Employee::query()->find($id);
//        return view('homework2.edit_employee',['data' => Employee::query()->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('homework2.edit_employee',$employee->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EmployeeRequest $request
     * @param Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());
        return redirect()->back()->with('success', '更新成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $count = $employee->purchases()->count();
        if ($count) {
            return redirect()->back()->with('danger','#'.$employee[Employee::ID].' 存在该员工对应的 '.$count.'条 购买记录，无法删除');
        }
        try {
            $employee->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('danger',$exception->getMessage());
        }
        return redirect()->back()->with('success','删除成功');
    }
}
