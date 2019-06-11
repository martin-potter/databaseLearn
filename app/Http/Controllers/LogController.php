<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogRequest;
use App\Models\Employee;
use App\Models\Log;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Log::all();
        return view('homework2._list',[
            'title'=>'日志 log',
            'columns' => [
                Log::WHO => '操作员',
                Log::TIME => '相应时间',
                Log::TABLE_NAME => '表名',
                Log::OPERATION => '操作',
                Log::KEY_VALUE => '记录值',
                Log::CREATED_AT => '创建时间',
                Log::UPDATED_AT => '修改时间',
            ],
            'data' => $data->toArray(),
            'create' => 'log.create',
            'edit' => 'log.edit',
            'delete' => 'log.destroy'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all([Employee::ID.' as id', Employee::NAME.' as text']);
        return view('homework2.edit_log',[
            'employees' => $employees,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogRequest $request)
    {
        $log = new Log($request->validated());
        $log->save();
        return redirect()->to(route('log.index'))->with('success', '新增成功');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Log $log
     * @return \Illuminate\Http\Response
     */
    public function edit(Log $log)
    {
        $employees = Employee::all([Employee::ID.' as id', Employee::NAME.' as text']);
        $table = [
            ['id' => 'customers', 'text' => 'customers'],
            ['id' => 'logs', 'text' => 'logs'],
            ['id' => 'purchases', 'text' => 'purchases'],
            ['id' => 'products', 'text' => 'products'],
            ['id' => 'suppliers', 'text' => 'suppliers'],
            ['id' => 'employees', 'text' => 'employees'],
        ];
        $data = $log->toArray();
        $data['employees'] = $employees;
        $data['table'] = $table;
        return view('homework2.edit_log',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param LogRequest $request
     * @param Log $log
     * @return \Illuminate\Http\Response
     */
    public function update(LogRequest $request, Log $log)
    {
        $log->update($request->validated());
        return redirect()->back()->with('success', '更新成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Log $log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log $log)
    {
        try {
            $log->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('danger',$exception->getMessage());
        }
        return redirect()->back()->with('success', '删除成功');
    }
}
