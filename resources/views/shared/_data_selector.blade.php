
<link href="https://magicbox.bk.tencent.com/static_api/v3/assets/select2-3.5.2/select2.css" rel="stylesheet">
<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/jquery-1.10.2.min.js"></script>
<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/select2-3.5.2/select2.js"></script>
<div>
    <div class="king-block-content clearfix">
        <div class="plugin3_demo" id="{{$id}}" style="display:inline-block;">
            <!-- select2 静态 start -->
            <select class="select2_box" style="width:300px;" name="{{$name}}">
                <option value=""></option>
                @foreach($list as $item)
                    <option value="{{$item['id']}}"
                        {{(isset($selected) ? ($selected == $item['id'] ? ' selected="selected' : '') : '') }}>
                        {{$item['text']}}
                    </option>
                @endforeach
            </select>
            <!-- select2 静态 end -->
        </div>
    </div>
</div>
<script type="text/javascript">
    //plugin3_demo1_js_start
    // select2 基础
    $("#{{$id}} .select2_box").select2({
        placeholder: '请选择选项'
    });
    //plugin3_demo1_js_end
</script>
