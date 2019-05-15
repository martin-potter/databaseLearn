@extends('layouts.base',['array' => ['menu_4' => '1']])

@section('content')
    <div style="margin: 60px">

    <div class="row">
        <div class="col-md-6 text-center col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="king-instruction  king-instruction-info " style="text-align: left">
                        <h1>销售统计</h1>
                        <h3>销售统计任务介绍</h3>
                        <h4>(4 points) Write a procedure to report the monthly sale information for any given product. For example, you can use a procedure, say report_monthly_sale(prod_id),
                            for this operation. For the given product id, you need to report the product name, the month (the first three letters of the month, e.g., FEB for February), year,
                            the total quantity sold each month, the total dollar amount sold each month,
                            and the average sale price (the total dollar amount divided by the total quantity) of each month.
                            You need to list the information for only those months during which the given product has been purchased by some customers.
                        </h4>
                        <h4>
                            通过选定产品的id，统计该产品每月的销售情况（销售数量、销售价格），只需要列出有销售记录的月份。
                        </h4>
                        <h4><b>提示：点击下面按钮进入操作</b></h4>
                        <a class="king-btn-demo king-btn king-info" style=" font-size: large; padding: auto;width: 200px; margin-top: 30px" title="销售统计">销售统计 >>></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="king-instruction  king-instruction-info " style="text-align: left">
                        <h1>购买记录</h1>
                        <h3>购买任务介绍</h3>
                        <h4>实现员工为顾客录入购买记录。在录入购买记录同时会涉及相关联表操作如下：<br>
                            1 员工与顾客和产品都必须存在与数据库中<br>
                            2 购买的产品数量不能超过库存<br>
                            3 自动完成价格计算<br>
                            4 购买产品后产品库存相应减少，当产品库存低于补货门槛时自动补购买前数量的货物<br>
                            4 每个表的操作需要被记录<br>
                            5 每个对应操作完成需要提示相关信息
                        </h4>
                        <h4><b>提示：点击下面按钮进入操作</b></h4>
                        <a class="king-btn-demo king-btn king-info" style="font-size: large; padding: auto;width: 200px; margin-top: 30px" title="购买记录">购买记录 >>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
