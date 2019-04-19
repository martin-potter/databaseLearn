@extends('layouts.base',['array' => ['menu_3' => '1']])

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        <div class="king-instruction  king-instruction-info ">
            <h5>作业二</h5>
            <p>建立相关数据的数据库，并用一个页面显示所有的表名，即要求用户点击该表名显示出该表所有记录。并完成插入记录，删除记录以及修改记录的功能。
            </p>
            <p>注:所有的思考题均要求网页代码和运行后的界面。注意界面设计及美观性。</p>
        </div>
        <p></p>
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 数据表 table </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 7%">序号</th>
                        <th style="width:20%;">表名</th>
                        <th>备注</th>
                        <th>数据条目</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $item)
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['table']}}</td>
                            <td>{{$item['desc']}}</td>
                            <td>{{$item['num']}}</td>
                            <td>
                                <a href={{empty($item['route']) ? '' : route($item['route'])}}>
                                    <button class="btn btn-xs btn-primary" title="编辑">
                                        <i class="glyphicon glyphicon-edit"></i> 编辑
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- 设置面板End -->
            </div>
        </div>
    </div>
@stop
