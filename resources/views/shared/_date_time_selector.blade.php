
{{--如果没有引用以下文件，请去掉此注释--}}
<link href="https://magicbox.bk.tencent.com/static_api/v3/assets/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="https://magicbox.bk.tencent.com/static_api/v3/assets/daterangepicker-2.0.5/daterangepicker.css" rel="stylesheet">
<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/jquery-1.10.2.min.js"></script>
<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/daterangepicker-2.0.5/moment.min.js"></script>
<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/daterangepicker-2.0.5/daterangepicker.js"></script>

<input type="text" class="form-control daterangepicker_demo" name="{{ $name or 'time' }}" id="daterangepicker_demo1" placeholder="选择日期...">
<script type="text/javascript">
    // 选择单个日期
    $('#daterangepicker_demo1').daterangepicker({
        locale : {
            format : 'YYYY-MM-DD HH:mm:ss'
        },
        autoApply: true,//选择日期后自动设置值
        singleDatePicker : true,//单选选择一个日期
        timePicker: true,//支持时间选择
        timePicker24Hour: true,//开启24小时时间制
        timePickerIncrement : 5, //分钟间隔
        timePickerSeconds: true //开启分钟选择

    });
</script>
