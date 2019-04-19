@extends('layouts.base')

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 产品 product</div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label for="inputCount3">ID(不可修改）：</label>
                        <input type="text" class="form-control"  placeholder="###" name="id"
                               value="{{ isset($id) ? $id : '###'}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">产品名称：</label>
                        <input type="text" class="form-control"  name="pname" value=""
                               placeholder="输入员工姓名">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">库存数量(qoh)：</label>
                        <input type="number" class="form-control" name="qoh" placeholder="输入库存数量">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">库存通知门槛(qoh_threshold)：</label>
                        <input type="number" class="form-control" name="qoh_threshold" placeholder="输入库存通知门槛">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">原始价格(original_price)：</label>
                        <input type="number" class="form-control" name="qoh_threshold" placeholder="输入原始价格">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">折扣(discnt_rate)：</label>
                        <input type="number" class="form-control" name="qoh_threshold" placeholder="输入折扣率（如0.1）">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">供应商：</label>
                        <p></p>
                        @include('shared._data_selector')
                    </div>
                    <div class="form-group">
                        <input type="button" class="king-btn king-success mr10" value="提交">
                        <input type="reset" class="king-btn king-default" value="取消">
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
