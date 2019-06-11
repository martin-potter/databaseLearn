<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Log;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeWorkController extends Controller
{
    public function hw2(Request $request)
    {
        return view('homework2.table_list',['table' => [
            [
                'id' => 1,
                'table' => Employee::TABLE,
                'num' => Employee::query()->count(Employee::ID),
                'desc' => '员工表',
                'route' => 'employee.index'
            ],[
                'id' => 2,
                'table' => Supplier::TABLE,
                'num' => Supplier::query()->count(Supplier::ID),
                'desc' => '供应商表',
                'route' => 'supplier.index'
            ],[
                'id' => 3,
                'table' => Product::TABLE,
                'num' => Product::query()->count(Product::ID),
                'desc' => '产品表',
                'route' => 'product.index'
            ],[
                'id' => 4,
                'table' => Customer::TABLE,
                'num' => Customer::query()->count(Customer::ID),
                'desc' => '顾客表',
                'route' => 'customer.index'
            ],[
                'id' => 5,
                'table' => Purchase::TABLE,
                'num' => Purchase::query()->count(Purchase::ID),
                'desc' => '购买记录表',
                'route' => 'purchase.index'
            ],[
                'id' => 6,
                'table' => Log::TABLE,
                'num' => Log::query()->count(Log::ID),
                'desc' => '日志记录表',
                'route' => 'log.index'
            ]
        ]]);
    }

    public function hw3(Request $request)
    {
        return view('hw3');
    }

    public function shop()
    {
        $products = DB::select('call show_products()');

        $supplier = Supplier::all()->toArray();
        $supplier = array_column($supplier, null, 'id');
        $data['products'] = $products;
        $data['supplier'] = $supplier;
        return view('shop.home',$data);
    }

    public function purchase(Request $request)
    {
        $pid = $request->input('id');
        $product = Product::query()->find($pid)->toArray();
        $customers = Customer::all([Customer::ID.' as id', Customer::NAME.' as text']);
        $employees = Employee::all([Employee::ID.' as id', Employee::NAME.' as text']);
        $data['product'] = $product;
        $data['customers'] = $customers;
        $data['employees'] = $employees;
        return view('shop.purchase', $data);
    }

    public function buy(Request $request)
    {
        $pid = $request->input('pid');
        $cid = $request->input('cid');
        $eid = $request->input('eid');
        $qty = $request->input('qty');
        if (empty($cid)) {
            return redirect()->back()->with('danger','顾客必选')->withInput();
        }
        if (empty($eid)) {
            return redirect()->back()->with('danger','员工必选')->withInput();
        }
        if (empty($qty)) {
            return redirect()->back()->with('danger','数量必填')->withInput();
        }
        $product = Product::query()->find($pid)->toArray();
        if (empty($product)) {
            return redirect()->back()->with('danger','没有此产品');
        }
        if ($product[Product::QOH] < $qty) {
            return redirect()->back()->with('danger', '库存不足')->withInput();
        }

        DB::select("call add_purchases(".$cid.",".$eid.",".$pid.",".$qty.")");

        if ($product[Product::QOH_THRESHOLD] > $product[Product::QOH] - $qty) {
            session()->flash('success', '已成功补货至库存'.$product[Product::QOH]*2);
        }
        return view('shop.success');
    }

}
