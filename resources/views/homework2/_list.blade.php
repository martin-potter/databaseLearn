@extends('layouts.base',['array' => ['menu_3' => '1']])

@section('content')
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://magicbox.bk.tencent.com/static_api/v3/bk/css/bk.css" rel="stylesheet">
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/jquery-1.10.2.min.js"></script>
    <div class="king-layout2-main mt15" style="width:960px;">
        <div class="king-instruction  king-instruction-info ">
            <h5>提示说明</h5>
            这里是数据表下的列表
            <ol>
                <li>点击新增可以新增记录</li>
                <li>点击编辑可以编辑相应选项</li>
                <li>点击删除可以删除相应记录</li>
            </ol>
            <b>注意：删除仅在没有级联删除条件下完成，删除不成功请检查相关表内容</b>
        </div>
        <p></p>
        @include('layouts._message')
        <p></p>
        <div class="panel panel-default pannel-overflow panel-tables table7_demo">
            <div class="panel-heading"> {{$title}}</div>
            <div class="panel-body panel-search-body">
                <a  href="{{route('hw2')}}" class="king-btn king-radius king-default" title="添加变量">返回</a>
                <a  href="{{route($create)}}" class="king-btn king-radius king-primary" title="添加变量">新增数据</a>
            </div>
            <div class="panel-body">
                <table class="table" id="table_demo2">
                    <thead>
                    <tr>
                        <th style="width: 7%">序号</th>
                        @foreach($columns as $column)
                            <th>{{$column}}</th>
                        @endforeach
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                        @foreach($item as $key => $value)
                                <td>{{$value}}</td>
                        @endforeach
                        <td>
                            <a  href="{{route($edit, $item['id'])}}">
                                <button class="btn btn-xs btn-primary" title="编辑">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </button>
                            </a>
                            <a>
                                <button class="btn btn-xs btn-danger" title="删除" onclick="delete_item('{{route($delete, $item['id'])}}')">
                                    <i class="glyphicon glyphicon-remove" id="{{'button_'.$item['id']}}"></i>
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
        <script type="text/javascript">
            function delete_item(url) {
                if (confirm('确定要删除？')) {
                    $.post(url,{_method:'DELETE'}, function (result) {
                        $(document).find("html").html(result)
                    })
                }
            }
        </script>
    </div>

@stop
