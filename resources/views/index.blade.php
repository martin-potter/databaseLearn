@extends('layouts.base')

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        <div class="king-instruction  king-instruction-info ">
            <h5>提示说明</h5>
            <p>您可以设置应用运行时的环境变量，在进行测试部署和正式部署操作时会生效</p>
        </div>
        <p></p>
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 面板标题 </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 7%">序号</th>
                        <th style="width:20%;">表名</th>
                        <th>数据条目</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>版本更新</td>
                        <td>
                            完成
                        </td>
                        <td>
                            <button class="btn btn-xs btn-primary" title="编辑">
                                <i class="glyphicon glyphicon-edit"></i> 编辑
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>数据备份</td>
                        <td>
                            70%
                        </td>
                        <td>
                            <button class="btn btn-xs btn-primary" title="编辑">
                                <i class="glyphicon glyphicon-edit"></i> 编辑
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>定时任务</td>
                        <td>
                            未开始
                        </td>
                        <td>
                            <button class="btn btn-xs btn-primary" title="编辑">
                                <i class="glyphicon glyphicon-edit"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!-- 设置面板End -->
            </div>
        </div>
    </div>
@stop
