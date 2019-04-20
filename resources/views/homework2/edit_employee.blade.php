@extends('layouts.base',['array' => ['menu_3' => '1']])

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        @include('layouts._message')
        @include('layouts._errors')
        <p></p>
        <div class="panel panel-default mb0">

            <div class="panel-heading"> 员工 employee </div>

            <div class="panel-body">

                @if(isset($id))
                    <form method="POST" action="{{route('employee.update',$id)}}" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form method="POST" action="{{route('employee.store')}}" accept-charset="UTF-8">
                @endif
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                    <div class="form-group">
                        <label for="inputCount3">ID(不可修改）：</label>
                        <input type="text"  class="form-control" id="inputCount3" placeholder="###" name="id" value="{{ isset($id) ? $id : ''}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">员工姓名：</label>
                        <input type="text" class="form-control" id="inputCount3" name="ename" value="{{ isset($ename) ? $ename : '' }}" placeholder="输入员工姓名">
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">城市：</label>
                        <input type="text" class="form-control" id="inputCount3" name="city" value="{{ isset($city) ? $city : '' }}" placeholder="输入城市">
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">创建时间：</label>
                        <input type="text" class="form-control" id="inputCount3" value="{{isset($created_at) ? $created_at : ''}}" placeholder="###" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">修改时间：</label>
                        <input type="text" class="form-control" id="inputCount3" value="{{isset($updated_at) ? $updated_at : ''}}" placeholder="###" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{route('employee.index')}}" class="king-btn king-default mr10" style="background-color: rgba(72,73,68,0.35)" >返回</a>
                        <button type="submit" class="king-btn king-success mr10" value="提交">提交</button>
                        <button class="king-btn king-default mr10" type="reset" value="重置">重置</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@stop
