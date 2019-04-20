<link href="https://magicbox.bk.tencent.com/static_api/v3/assets/fontawesome/css/font-awesome.css" rel="stylesheet">
<link href="https://magicbox.bk.tencent.com/static_api/v3/bk/css/bk.css" rel="stylesheet">
@if (count($errors) > 0)
    <div class="king-notice2 king-notice-warning notice-borders">
        <i class="fa fa-exclamation-circle"></i>
        <div class="notice-text">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </div>
@endif
