@extends('layouts.base',['array' => ['menu_3' => '1']])

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        @include('layouts._message')
        @include('layouts._errors')
        <p></p>
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 日志 log </div>
            <div class="panel-body">
                @if(isset($id))
                    <form method="POST" action="{{route('log.update',$id)}}" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                        @else
                            <form method="POST" action="{{route('log.store')}}" accept-charset="UTF-8">
                                @endif
                                <div class="form-group">
                                    <label for="inputCount3">ID(不可修改）：</label>
                                    <input type="text" class="form-control"  placeholder="###" name="id"
                                           value="{{ isset($id) ? $id : '###'}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">操作员（员工）：</label>
                                    <p></p>
                                    <div>
                                        <div class="king-block-content clearfix">
                                            <div class="plugin3_demo" id="employee_selector" style="display:inline-block;">
                                                <select class="select2_box" style="width:300px;" name="who">
                                                    <option value=""></option>
                                                    @foreach($employees as $item)
                                                        <option value="{{$item['id']}}"
                                                            {{(empty(old('who')) ?
                                                               (isset($who) ?
                                                                   ($who == $item['id'] ? ' selected="selected' : '')
                                                                   : '')
                                                               : (old('who') == $item['id'] ? ' selected="selected' : ''))
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
                                    <label for="inputPassword3">表名：</label>
                                    <p></p>
                                    <div>
                                        <div class="king-block-content clearfix">
                                            <div class="plugin3_demo" id="product_selector" style="display:inline-block;">
                                                <select class="select2_box" style="width:300px;" name="table_name">
                                                    <option value=""></option>
                                                    @foreach($table as $item)
                                                        <option value="{{$item['id']}}"
                                                            {{(empty(old('table_name')) ?
                                                               (isset($table_name) ?
                                                                   ($table_name == $item['id'] ? ' selected="selected' : '')
                                                                   : '')
                                                               : (old('table_name') == $item['id'] ? ' selected="selected' : ''))
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
                                    <label for="inputPassword3">操作：</label>
                                    <input type="text" class="form-control" name="operation"
                                           value="{{ !empty(old('operation')) ? old('operation') : (isset($operation) ? $operation : '') }}"
                                           placeholder="输入操作">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">记录值：</label>
                                    <input type="text" step="0.01" class="form-control" name="key_value"
                                           value="{{ !empty(old('key_value')) ? old('key_value') : (isset($key_value) ? $key_value : '') }}"
                                           placeholder="输入记录值">
                                </div>
                                <div class="form-group">
                                    <label for="inputCount3">操作时间：</label>
                                    @include('shared._date_time_selector',
                                    [
                                        'name' => 'time',
                                        'time' =>!empty(old('time')) ? old('time') : (isset($time) ? $time : '')
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
                                    <a href="{{route('log.index')}}" class="king-btn king-default mr10" style="background-color: rgba(72,73,68,0.35)" >返回</a>
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
        $("#employee_selector .select2_box").select2({
            placeholder: '请选择员工'
        });
        $("#product_selector .select2_box").select2({
            placeholder: '请选择产品'
        })
    </script>
@stop
