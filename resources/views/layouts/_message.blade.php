
<link href="https://magicbox.bk.tencent.com/static_api/v3/assets/fontawesome/css/font-awesome.css" rel="stylesheet">
<link href="https://magicbox.bk.tencent.com/static_api/v3/bk/css/bk.css" rel="stylesheet">

@if (Session::has('message'))
    <div class="king-notice2 king-notice-info notice-borders">
        <i class="fa fa-info-circle"></i>
        <div class="notice-text">
            <p>{{ Session::get('message') }}</p>
        </div>
    </div>
    {{--<div class="alert alert-info">--}}
        {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
        {{--{{ Session::get('message') }}--}}
    {{--</div>--}}
@endif

@if (Session::has('success'))
    <div class="king-notice2 king-notice-success notice-borders">
        <i class="fa fa-check-circle"></i>
        <div class="notice-text">
            <p>{{ Session::get('success') }}</p>
        </div>
    </div>
    {{--<div class="alert alert-success">--}}
        {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
        {{--{{ Session::get('success') }}--}}
    {{--</div>--}}
@endif

@if (Session::has('danger'))
    <div class="king-notice2 king-notice-danger notice-borders">
        <i class="fa fa-exclamation-triangle"></i>
        <div class="notice-text">
            <p>{{ Session::get('danger') }}</p>
        </div>
    </div>
    {{--<div class="alert alert-danger">--}}
        {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
        {{--{{ Session::get('danger') }}--}}
    {{--</div>--}}
@endif
