<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- 若您需要使用Kendo UI Professional，请联系版权人获得合法的授权或许可。 -->
    <!-- Bootstrap css -->
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
{{--    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">--}}
    <!-- kendo ui css -->
{{--    <link href="{{asset('css/kendo.common.min.css')}}" rel="stylesheet">--}}
{{--    <link href="{{asset('css/kendo.default.min.css')}}" rel="stylesheet">--}}
    <!-- font-awesome -->
    {{--<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">--}}
    <!--蓝鲸提供的公用样式库 -->
    <link href="{{asset('css/bk.css')}}" rel="stylesheet">
    <link href="{{asset('css/bk_pack.css')}}" rel="stylesheet">
    <!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
    {{--<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>--}}
    <!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
    {{--<script src="{{asset('js/echarts-all.js')}}"></script>--}}
    {{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
    <!-- 包括所有kendoui的js插件或者可以根据需要使用的js插件调用　-->
    {{--<script src="{{asset('js/kendo.all.min.js')}}"></script>--}}
    {{--<script src="{{asset('js/bk.js')}}"></script>--}}
    <!-- 数据埋点统计 -->
    {{--<script src="{{asset('js/analysis.js')}}"></script>--}}
    <!-- 以下两个插件用于在IE8以及以下版本浏览器支持HTML5元素和媒体查询，如果不需要用可以移除 -->
    <!--[if lt IE 9]><script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/html5shiv.min.js"></script><script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/respond.min.js"></script><![endif]-->
</head>

<body class="bg-white" data-bg-color="bg-white">
<div class="king-page-box">
    @include('layouts._header', isset($array) ? $array : [])
    <div>
        @yield('content')
    </div>
</div>

</body>

</html>
