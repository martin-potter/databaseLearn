<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homework2._list',[
            'title'=>'供应商表 supplier',
            'columns' => [
                Supplier::NAME => '名称',
                Supplier::CITY => '城市',
                Supplier::TELEPHONE => '电话',
                Supplier::CREATED_AT => '创建时间',
                Supplier::UPDATED_AT => '修改时间',
            ],
            'data' => Supplier::all()->toArray(),
            'create' => 'supplier.create',
            'edit' => 'supplier.edit',
            'delete' => 'supplier.destroy'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homework2.edit_supplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SupplierRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierRequest $request)
    {
        $supplier = new Supplier($request->validated());
        $supplier->save();
        return redirect()->to(route('supplier.index'))->with('success','新增成功');
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
     * @param Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('homework2.edit_supplier',$supplier->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SupplierRequest $request
     * @param Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierRequest $request, Supplier $supplier)
    {
        $name = $request->input(Supplier::NAME);
        if ($supplier[Supplier::NAME] != $name) {
            $count = Supplier::query()
                ->where(Supplier::NAME,'=',$name)
                ->count(Supplier::ID);
            if ($count) {
                return redirect()->back()->with('danger','名字被占用，请更换')->withInput();
            }
        }
        $supplier->update($request->validated());
        return redirect()->back()->with('success', '更新成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $count = $supplier->products()->count();
        if ($count) {
            return redirect()->back()->with('danger','#'.$supplier[Supplier::ID].' 存在该供应商对应的 '.$count.'条 产品，无法删除');
        }
        try {
            $supplier->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('danger',$exception->getMessage());
        }
        return redirect()->back()->with('success','删除成功');
    }
}
