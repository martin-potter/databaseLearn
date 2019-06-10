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
                <form class="form-horizontal" action="{{route('static')}}" method="GET">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">产品：</label>
                        <div class="col-sm-7">
                            <select name="pid" class="form-control">
                                @foreach($products as $item)
                                <option {{$pid == $item['id'] ? ' selected="selected' : ''}} value="{{$item['id']}}">{{$item['text']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="king-btn king-success mr10" value="提交">
                    </div>
                </form>
            </div>
        </div>

        <table class="table table-out-bordered table-bordered table-hover">
            <thead>
            <tr>
                <th style="width: 7%">年-月</th>
                <th style="width:20%;">总销售数量</th>
                <th>总销售额</th>
                <th>交易订单数量</th>
                <th>均价</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $time => $item)
            <tr>
                <td>{{ $time }}</td>
                <td>{{$item['total_num']}} 个</td>
                <td>{{$item['total_price']}} 元</td>
                <td>{{$item['count']}} 单</td>
                <td>{{$item['total_price'] / $item['total_num']}} 元/个</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
