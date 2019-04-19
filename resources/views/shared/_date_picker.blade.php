
{{--如果没有引用以下文件，请去掉此注释--}}
<link href="https://magicbox.bk.tencent.com/static_api/v3/assets/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/datetimepicker/js/locales/bootstrap-datetimepicker.zh-TW.js" charset="UTF-8"></script>

<div class="input-group date" id="plugin9_demo2" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    <input class="form-control" size="16" type="text" value="">
    <input type="hidden" id="dtp_input2" value="2019-04-13">
    <br>
</div>
<script type="text/javascript">
    //日期选择器(Bootstrap)-2，日期选择
    $('#plugin9_demo2').datetimepicker({
        language:  'zh-TW',
        weekStart: 1,
        todayBtn:  true,
        autoclose: true,
        todayHighlight: true,
        startView: 2,
        minView: 2,
        forceParse: false,
        format:"yyyy-mm-dd",
    });
</script>
