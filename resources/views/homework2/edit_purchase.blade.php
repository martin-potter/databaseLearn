@extends('layouts.base',['array' => ['menu_3' => '1']])

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        @include('layouts._message')
        @include('layouts._errors')
        <p></p>
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 购买记录 purchase </div>
            <div class="panel-body">
                @if(isset($id))
                    <form method="POST" action="{{route('purchase.update',$id)}}" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                        <form method="POST" action="{{route('purchase.store')}}" accept-charset="UTF-8">
                @endif
                    <div class="form-group">
                        <label for="inputCount3">ID(不可修改）：</label>
                        <input type="text" class="form-control"  placeholder="###" name="id"
                               value="{{ isset($id) ? $id : '###'}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">顾客：</label>
                        <p></p>
                        <div>
                            <div class="king-block-content clearfix">
                                <div class="plugin3_demo" id="customer_selector" style="display:inline-block;">
                                    <select class="select2_box" style="width:300px;" name="cid">
                                        <option value=""></option>
                                        @foreach($customers as $item)
                                            <option value="{{$item['id']}}"
                                                {{(empty(old('cid')) ?
                                                    (isset($cid) ?
                                                        ($cid == $item['id'] ? ' selected="selected' : '')
                                                        : '')
                                                    : (old('cid') == $item['id'] ? ' selected="selected' : ''))
                                                }}>
                                                {{$item['text']}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">员工：</label>
                        <p></p>
                        <div>
                            <div class="king-block-content clearfix">
                                <div class="plugin3_demo" id="employee_selector" style="display:inline-block;">
                                    <select class="select2_box" style="width:300px;" name="eid">
                                        <option value=""></option>
                                        @foreach($employees as $item)
                                            <option value="{{$item['id']}}"
                                                {{(empty(old('eid')) ?
                                                   (isset($eid) ?
                                                       ($eid == $item['id'] ? ' selected="selected' : '')
                                                       : '')
                                                   : (old('eid') == $item['id'] ? ' selected="selected' : ''))
                                                }}>
                                                {{$item['text']}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">产品：</label>
                        <p></p>
                        <div>
                            <div class="king-block-content clearfix">
                                <div class="plugin3_demo" id="product_selector" style="display:inline-block;">
                                    <select class="select2_box" style="width:300px;" name="pid">
                                        <option value=""></option>
                                        @foreach($products as $item)
                                            <option value="{{$item['id']}}"
                                                {{(empty(old('pid')) ?
                                                   (isset($pid) ?
                                                       ($pid == $item['id'] ? ' selected="selected' : '')
                                                       : '')
                                                   : (old('pid') == $item['id'] ? ' selected="selected' : ''))
                                                }}>
                                                {{$item['text']}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">购买数量：</label>
                        <input type="number" class="form-control" name="qty"
                               value="{{ !empty(old('qty')) ? old('qty') : (isset($qty) ? $qty : '') }}"
                               placeholder="输入库存数量">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">总价格：</label>
                        <input type="number" step="0.01" class="form-control" name="total_price"
                               value="{{ !empty(old('total_price')) ? old('total_price') : (isset($total_price) ? $total_price : '') }}"
                               placeholder="输入总价">
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">购买时间：</label>
                        @include('shared._date_time_selector',
                        [
                            'name' => 'ptime',
                            'time' =>!empty(old('ptime')) ? old('ptime') : (isset($ptime) ? $ptime : '')
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
                        <a href="{{route('purchase.index')}}" class="king-btn king-default mr10" style="background-color: rgba(72,73,68,0.35)" >返回</a>
                        <button type="submit" class="king-btn king-success mr10" value="提交">提交</button>
                        <button class="king-btn king-default mr10" type="reset" value="重置">重置</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/select2-3.5.2/select2.css" rel="stylesheet">
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/jquery-1.10.2.min.js"></script>
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/select2-3.5.2/select2.js"></script>
    <script type="text/javascript">
        $("#customer_selector .select2_box").select2({
            placeholder: '请选择客户'
        });
        $("#employee_selector .select2_box").select2({
            placeholder: '请选择员工'
        })
        $("#product_selector .select2_box").select2({
            placeholder: '请选择产品'
        })
    </script>
@stop
