@extends('layouts.base',['array' => ['menu_3' => '1']])

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        @include('layouts._message')
        @include('layouts._errors')
        <p></p>
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 购买 purchase </div>
            <div class="panel-body">

                <form method="POST" action="{{route('buy')}}" accept-charset="UTF-8">

                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <a href="javascript:;" class="thumbnail">
                                <img src={{asset("img/".$product['pname']."1.jpg")}} alt="" />
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="javascript:;" class="thumbnail">
                                <img src={{asset("img/".$product['pname']."2.jpg")}} alt="" />
                            </a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="javascript:;" class="thumbnail">
                                <img src={{asset("img/".$product['pname']."3.jpg")}} alt="" />
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="hidden" value="{{$product['id']}}" name="pid">
                    </div>

                    <div class="form-group">
                        <label>产品名称：<strong>{{$product['pname']}}</strong></label>
                        <p></p>
                    </div>

                    <div class="form-group">
                        <label>单价：<strong>{{$product['original_price']}}</strong></label>
                        <p></p>
                    </div>

                    <div class="form-group">
                        <label>折扣：<strong>{{$product['discnt_rate']}}</strong></label>
                        <p></p>
                    </div>

                    <div class="form-group">
                        <label>库存：<strong>{{$product['qoh']}}</strong></label>
                        <p></p>
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
                        <label for="inputPassword3">购买数量：</label>
                        <input type="number" class="form-control" name="qty" min="0"
                               value="{{ !empty(old('qty')) ? old('qty') : (isset($qty) ? $qty : '') }}"
                               placeholder="输入库存数量">
                    </div>
                    <div class="form-group">
                        <a href="{{route('shop')}}" class="king-btn king-default mr10" style="background-color: rgba(72,73,68,0.35)" >返回</a>
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
