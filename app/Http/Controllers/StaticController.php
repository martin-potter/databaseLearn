<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaticController extends Controller
{
    public function showStatics(Request $request)
    {
        $pid = $request->input('pid', 1);
        $temp = [];
        $result = DB::select("call report_monthly_sale(".$pid.")");
        foreach ($result as $item) {
            $temp[$item->date]['total_price'] = $item->total_price;
            $temp[$item->date]['total_num'] = $item->qty;
            $temp[$item->date]['count'] = $item->count;
        }

//        $list = Purchase::query()->where(Purchase::PID, $pid)->orderBy(Purchase::PTIME)->get();
//        // 分类购买记录
//        $group = $list->groupBy(function ($item, $key){
//            $time = Carbon::createFromTimeString($item[Purchase::PTIME]);
//            return $time->year.'-'.$time->month;
//        });
//
//        $result = [];
//        // 统计并格式化
//        foreach ($group as $month => $list) {
//            $count = count($list);
//            $total_num = $total_price = 0;
//            foreach ($list as $item) {
//                $total_num += $item[Purchase::QTY];
//                $total_price += $item[Purchase::TOTAL_PRICE];
//            }
//            $temp['total_num'] = $total_num;
//            $temp['total_price'] = $total_price;
//            $temp['count'] = $count;
//            $result[$month] = $temp;
//        }

        $data['pid'] = $pid;
        $data['data'] = $temp;

//        dd($data);

        // 查询所有的 pid 及 名称
        $products = Product::query()->get([Product::ID.' as id', Product::NAME.' as text'])->toArray();
        $data['products'] = $products;
        return view('hw3static', $data);


    }
}
