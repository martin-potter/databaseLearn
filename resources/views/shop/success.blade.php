@extends('layouts.base',['array' => ['menu_3' => '1']])

@section('content')
    <link href="https://magicbox.bk.tencent.com/static_api/v3/bk/css-pro/bk.css" rel="stylesheet">
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/bk-icon-2.0/iconfont.css" rel="stylesheet">
    <div class="king-layout2-main mt15" style="width:960px;">
        @include('layouts._message')
        @include('layouts._errors')
        <p></p>
        <div class="king-notice3 king-notice-success">
            <span class="king-notice-img"></span>
            <div class="king-notice-text">
                <p class="f24">购买成功</p>
                <p class="f12"><span class="king-notice3-color">点击</span>继续操作</p>
                <a href="{{route('shop')}}"><button class="bk-text-button bk-success" title="返回" >返回</button></a>
                <a href="{{route('purchase.index')}}"> <button class="bk-text-button bk-warning" title="查看购买记录" >查看购买记录</button></a>

            </div>
        </div>
    </div>
@stop
