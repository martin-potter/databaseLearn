<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Http\Requests\SupplierRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homework2._list',[
            'title'=>'顾客表 customer',
            'columns' => [
                Customer::NAME => '名称',
                Customer::CITY => '城市',
                Customer::VISITS_MADE => '购买次数',
                Customer::LAST_VISIT_TIME => '最后购买时间',
                Customer::CREATED_AT => '创建时间',
                Customer::UPDATED_AT => '修改时间',
            ],
            'data' => Customer::all()->toArray(),
            'create' => 'customer.create',
            'edit' => 'customer.edit',
            'delete' => 'customer.destroy'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homework2.edit_customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CustomerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $customer = new Customer($request->toArray());
        $customer->save();
        return redirect()->to(route('customer.index'))->with('success','新增成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('homework2.edit_customer', $customer->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CustomerRequest $request
     * @param Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request,Customer $customer)
    {
        $customer->update($request->validated());
        return redirect()->back()->with('success','更新成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $count = $customer->purchases()->count();
        if ($count) {
            return redirect()->back()->with('danger','#'.$customer[Customer::ID].'存在该用户对于的.'.$count.'条 购买记录，无法删除');
        }
        try {
            $customer->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('danger',$exception->getMessage());
        }
        return redirect()->back()->with('success','删除成功');
    }
}
