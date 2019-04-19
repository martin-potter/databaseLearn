@extends('layouts.base',['array' => ['menu_3' => '1']])

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 顾客 customer </div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label for="inputCount3">ID(不可修改）：</label>
                        <input type="text"  class="form-control" id="inputCount3" placeholder="###" name="id" value="{{ isset($id) ? $id : '###'}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">访客姓名：</label>
                        <input type="text" class="form-control" id="inputCount3" name="cname" value="" placeholder="输入供应商姓名">
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">城市：</label>
                        <input type="text" class="form-control" id="inputCount3" name="city" value="" placeholder="输入城市">
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">visit_made：</label>
                        <input type="text" class="form-control" id="inputCount3" name="city" value="" placeholder="输入visit_made">
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">最后访问时间：</label>
                        @include('shared._date_time_selector',['name' => 'last_visit_time'])
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
