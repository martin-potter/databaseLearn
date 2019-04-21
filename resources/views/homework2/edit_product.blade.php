@extends('layouts.base',['array' => ['menu_3' => '1']])
.

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        @include('layouts._message')
        @include('layouts._errors')
        <p></p>
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 产品 product</div>
            <div class="panel-body">
                @if(isset($id))
                    <form method="POST" action="{{route('product.update',$id)}}" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form method="POST" action="{{route('product.store')}}" accept-charset="UTF-8">
                @endif
                    <div class="form-group">
                        <label for="inputCount3">ID(不可修改）：</label>
                        <input type="text" class="form-control"  placeholder="###" name="id"
                               value="{{ isset($id) ? $id : '###'}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">产品名称：</label>
                        <input type="text" class="form-control" name="pname"
                               value="{{ !empty(old('pname')) ? old('pname') : (isset($pname) ? $pname : '') }}"
                               placeholder="输入产品姓名">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">库存数量(qoh)：</label>
                        <input type="number" class="form-control" name="qoh"
                               value="{{ !empty(old('qoh')) ? old('qoh') : (isset($qoh) ? $qoh : '') }}"
                               placeholder="输入库存数量">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">库存通知门槛(qoh_threshold)：</label>
                        <input type="number" class="form-control" name="qoh_threshold"
                               value="{{ !empty(old('qoh_threshold')) ? old('qoh_threshold') : (isset($qoh_threshold) ? $qoh_threshold : '') }}"
                               placeholder="输入库存通知门槛">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">原始价格(original_price)：</label>
                        <input type="number" step="0.01" class="form-control" name="original_price"
                               value="{{ !empty(old('original_price')) ? old('original_price') : (isset($original_price) ? $original_price : '') }}"
                               placeholder="输入原始价格">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">折扣(discnt_rate)：</label>
                        <input type="number" step="0.01" class="form-control" name="discnt_rate"
                               value="{{ !empty(old('discnt_rate')) ? old('discnt_rate') : (isset($discnt_rate) ? $discnt_rate : '') }}"
                               placeholder="输入折扣率（如0.1）">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">供应商：</label>
                        <p></p>
                        @include('shared._data_selector',
                        [
                            'id' => 'supplier_selector',
                            'name' => 'sid',
                            'list' => $list,
                            'selected' =>  !empty(old('sid')) ? old('sid') : (isset($sid) ? $sid : '')
                        ])
                    </div>
                        <div class="form-group">
                            <label for="inputCount3">创建时间：</label>
                            <input type="text" class="form-control" id="inputCount3"
                                   value="{{isset($created_at) ? $created_at : ''}}"
                                   placeholder="###" readonly>
                        </div>
                        <div class="form-group">
                            <label for="inputCount3">修改时间：</label>
                            <input type="text" class="form-control" id="inputCount3"
                                   value="{{isset($updated_at) ? $updated_at : ''}}"
                                   placeholder="###" readonly>
                        </div>
                    <div class="form-group">
                        <a href="{{route('product.index')}}" class="king-btn king-default mr10" style="background-color: rgba(72,73,68,0.35)" >返回</a>
                        <button type="submit" class="king-btn king-success mr10" value="提交">提交</button>
                        <button class="king-btn king-default mr10" type="reset" value="重置">重置</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
