<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::with('supplier')->get()->toArray();
        foreach ($data as $index => $product) {
            $data[$index][Product::SID] =
                $product['supplier'][Supplier::NAME];
            unset($data[$index]['supplier']);
        }
        return view('homework2._list',[
            'title'=>'产品表 product',
            'columns' => [
                Product::NAME => '产品名称',
                Product::QOH => '存储数量',
                Product::QOH_THRESHOLD => '补货门槛',
                Product::ORIGINAL_PRICE => '原始价格',
                Product::DISCNT_RATE => '折扣率',
                Product::SID => '供应商',
                Product::CREATED_AT => '创建时间',
                Product::UPDATED_AT => '修改时间'
            ],
            'data' => $data,
            'create' => 'product.create',
            'edit' => 'product.edit',
            'delete' => 'product.destroy'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //查询供应商列表
        $supplier_list = Supplier::all(Supplier::ID,Supplier::NAME)->toArray();
        $list = [];
        foreach ($supplier_list as $item) {
            $tmp['id'] = $item[Supplier::ID];
            $tmp['text'] = $item[Supplier::NAME];
            $list[] = $tmp;
        }
        return view('homework2.edit_product', ['list' => $list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product($request->validated());
        $product->save();
        return redirect()->to(route('product.index'))->with('success','新增成功');
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
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //查询供应商列表
        $supplier_list = Supplier::all(Supplier::ID,Supplier::NAME)->toArray();
        $list = [];
        foreach ($supplier_list as $item) {
            $tmp['id'] = $item[Supplier::ID];
            $tmp['text'] = $item[Supplier::NAME];
            $list[] = $tmp;
        }
        $data = $product->toArray();
        $data['list'] = $list;
        return view('homework2.edit_product', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect()->back()->with('success', '更新成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $count = $product->purchases()->count();
        if ($count) {
            return redirect()->back()->with('danger','#'.$product[Product::ID].' 存在该产品对应的'.$count.'条 购买记录,无法删除');
        }
        try {
            $product->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('danger',$exception->getMessage());
        }
        return redirect()->back()->with('success','删除成功');
    }
}
