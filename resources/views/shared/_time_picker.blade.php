
{{--如果没有引用以下文件，请去掉此注释--}}
<link href="https://magicbox.bk.tencent.com/static_api/v3/assets/clockpicker-0.0.7/bootstrap-clockpicker.min.css" rel="stylesheet">
<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/clockpicker-0.0.7/bootstrap-clockpicker.min.js"></script>

<input class="form-control clockpicker" id="clockpicker_demo3" value="" placeholder="Now">
<script type="text/javascript">
    // 设置默认值，自动关闭选择框
    $('#clockpicker_demo3').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
</script>
