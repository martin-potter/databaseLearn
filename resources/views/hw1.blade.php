@extends('layouts.base',['array' => ['menu_2' => '1']])

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        @include('shared._info',[
        'title' => '作业一说明',
        'info' => '建立一个php页面，打印出 现在的时间，同时计算出与2019年暑假（暑假开始日期：2019/7/15）相差的天数，用适当的方式显示'])
        @include('shared._show2col',[
            'value_1' => now(),
            'col_1' => '当前时间',
            'value_2' => now()->diff(\Carbon\Carbon::create(2019,7,15))->days,
            'col_2' => '距离暑假（2019\07\15）的天数'
            ])
    </div>
@stop
