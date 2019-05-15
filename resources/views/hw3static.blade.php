@extends('layouts.base',['array' => ['menu_4' => '1']])


@section('content')
    <div style="margin-left: 5%; margin-right: 5%">
        <div class="king-block king-block-bordered">
            <div class="king-block-header king-gray-light">
                <ul class="king-block-options">
                    <li>
                        <button type="button"><i class="fa fa-cog"></i></button>
                    </li>
                </ul>
                <h3 class="king-block-title">选择产品</h3>
            </div>
            <div class="king-block-content">
                <form class="form-horizontal" method="POST">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">地区：</label>
                        <div class="col-sm-7">
                            <select name="" id="" class="form-control">
                                <option value="深圳">深圳</option>
                                <option value="北京">北京</option>
                                <option value="上海">上海</option>
                                <option value="广州">广州</option>
                            </select>
                        </div>
                        <input type="button" class="king-btn king-success mr10" value="提交">
                    </div>
                </form>
            </div>
        </div>

        <table class="table table-out-bordered table-bordered table-hover">
            <thead>
            <tr>
                <th style="width: 7%">序号</th>
                <th style="width:20%;">域名</th>
                <th>操作行为</th>
                <th>操作结果</th>
                <th>操作时间</th>
                <th>操作者IP</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>1</td>
                <td>qq.com</td>
                <td>会员账号登录</td>
                <td>成功</td>
                <td>2015-07-09</td>
                <td>112.95.6.4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>qq.com</td>
                <td>会员账号登录</td>
                <td>成功</td>
                <td>2015-07-09</td>
                <td>112.95.6.4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>qq.com</td>
                <td>会员账号登录</td>
                <td>成功</td>
                <td>2015-07-09</td>
                <td>112.95.6.4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>qq.com</td>
                <td>会员账号登录</td>
                <td>成功</td>
                <td>2015-07-09</td>
                <td>112.95.6.4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>qq.com</td>
                <td>会员账号登录</td>
                <td>成功</td>
                <td>2015-07-09</td>
                <td>112.95.6.4</td>
            </tr>
            </tbody>
        </table>
    </div>
@stop
