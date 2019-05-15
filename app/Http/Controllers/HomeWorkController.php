<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

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
                'id' => 5,
                'table' => Purchase::TABLE,
                'num' => Purchase::query()->count(Purchase::ID),
                'desc' => '购买记录表',
                'route' => 'purchase.index'
            ]
        ]]);
    }

    public function hw3(Request $request)
    {
        return view('hw3static');
    }

}
