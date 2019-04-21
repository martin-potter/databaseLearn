@extends('layouts.base',['array' => ['menu_3' => '1']])

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        @include('layouts._message')
        @include('layouts._errors')
        <p></p>
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 顾客 customer </div>
            <div class="panel-body">
                @if(isset($id))
                    <form method="POST" action="{{route('customer.update',$id)}}" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                        <form method="POST" action="{{route('customer.store')}}" accept-charset="UTF-8">
                @endif
                    <div class="form-group">
                        <label for="inputCount3">ID(不可修改）：</label>
                        <input type="text"  class="form-control" id="inputCount3"
                               placeholder="###" name="id"
                               value="{{ isset($id) ? $id : '###'}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">访客姓名：</label>
                        <input type="text" class="form-control" id="inputCount3" name="cname"
                               value="{{ !empty(old('cname')) ? old('cname') : (isset($cname) ? $cname : '') }}"
                               placeholder="输入访客姓名">
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">城市：</label>
                        <input type="text" class="form-control" id="inputCount3" name="city"
                               value="{{ !empty(old('city')) ? old('city') : (isset($city) ? $city : '') }}"
                               placeholder="输入城市">
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">购买次数：</label>
                        <input type="number" class="form-control" id="inputCount3" name="visits_made"
                               value="{{ !empty(old('visits_made')) ? old('visits_made') : (isset($visits_made) ? $visits_made : '') }}"
                               placeholder="输入购买次数">
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">最后购买时间：</label>
                        @include('shared._date_time_selector',['name' => 'last_visit_time', 'time' => isset($last_visit_time) ? $last_visit_time : ''])
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
                        <a href="{{route('customer.index')}}" class="king-btn king-default mr10" style="background-color: rgba(72,73,68,0.35)" >返回</a>
                        <button type="submit" class="king-btn king-success mr10" value="提交">提交</button>
                        <button class="king-btn king-default mr10" type="reset" value="重置">重置</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
