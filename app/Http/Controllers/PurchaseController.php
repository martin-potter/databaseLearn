<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseRequest;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relations = [
            'customer:'.Customer::ID.','.Customer::NAME,
            'employee:'.Employee::ID.','.Employee::NAME,
            'product:'.Product::ID.','.Product::NAME
        ];
        $data = Purchase::with($relations)->get();
        foreach ($data as $purchase) {
            $purchase[Purchase::CID] = $purchase['customer'][Customer::NAME];
            $purchase[Purchase::EID] = $purchase['employee'][Employee::NAME];
            $purchase[Purchase::PID] = $purchase['product'][Product::NAME];
            unset($purchase['customer']);
            unset($purchase['employee']);
            unset($purchase['product']);
        }
        return view('homework2._list',[
            'title'=>'购买记录 purchase',
            'columns' => [
                Purchase::CID => '客户',
                Purchase::EID => '员工',
                Purchase::PID => '产品',
                Purchase::QTY => '数量',
                Purchase::PTIME => '购买时间',
                Purchase::TOTAL_PRICE => '总价',
                Purchase::CREATED_AT => '创建时间',
                Purchase::UPDATED_AT => '修改时间',
            ],
            'data' => $data->toArray(),
            'create' => 'purchase.create',
            'edit' => 'purchase.edit',
            'delete' => 'purchase.destroy'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all([Customer::ID.' as id', Customer::NAME.' as text']);
        $employees = Employee::all([Employee::ID.' as id', Employee::NAME.' as text']);
        $products = Product::all([Product::ID.' as id', Product::NAME.' as text']);
        return view('homework2.edit_purchase',[
            'customers' => $customers,
            'employees' => $employees,
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PurchaseRequest $request)
    {
        $purchase = new Purchase($request->validated());
        $purchase->save();
        return redirect()->to(route('purchase.index'))->with('success', '新增成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
    public function edit(Purchase $purchase)
    {
        $customers = Customer::all([Customer::ID.' as id', Customer::NAME.' as text']);
        $employees = Employee::all([Employee::ID.' as id', Employee::NAME.' as text']);
        $products = Product::all([Product::ID.' as id', Product::NAME.' as text']);
        $data = $purchase->toArray();
        $data['customers'] = $customers;
        $data['employees'] = $employees;
        $data['products'] = $products;
        return view('homework2.edit_purchase',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PurchaseRequest $request, Purchase $purchase)
    {
        $purchase->update($request->validated());
        return redirect()->back()->with('success', '更新成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        try {
            $purchase->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('danger',$exception->getMessage());
        }
        return redirect()->back()->with('success', '删除成功');
    }
}
