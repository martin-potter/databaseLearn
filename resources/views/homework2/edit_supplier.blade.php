@extends('layouts.base')

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 供应商 supplier </div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label for="inputCount3">ID(不可修改）：</label>
                        <input type="text"  class="form-control" id="inputCount3" placeholder="###" value="{{ isset($id) ? $id : '###'}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">供应商姓名：</label>
                        <input type="text" class="form-control" id="inputCount3" name="sname" value="" placeholder="输入供应商姓名">
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">城市：</label>
                        <input type="text" class="form-control" id="inputCount3" name="city" value="" placeholder="输入城市">
                    </div>
                    <div class="form-group has-feedback">
                        <label for="inputGroupPhone">联系电话：</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputGroupPhone" aria-describedby="inputGroupSuccess2Status">
                        </div>
                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                        <span id="inputGroupSuccess2Status" class="sr-only">(success)</span>
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
