
<link href="https://magicbox.bk.tencent.com/static_api/v3/assets/select2-3.5.2/select2.css" rel="stylesheet">
<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/jquery-1.10.2.min.js"></script>
<script src="https://magicbox.bk.tencent.com/static_api/v3/assets/select2-3.5.2/select2.js"></script>

<div class="plugin3_demo" id="{{$id}}" style="display:inline-block;">
    <!-- select2 通过javascript start -->
    <div class="select2-container select2_box" id="s2id_autogen3" style="width:300px;">
        <a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-4">奔驰</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a>
        <label for="s2id_autogen4" class="select2-offscreen"></label>
        <input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4">
    </div>
    <input type="hidden" class="select2_box" style="width: 300px; display: none;" tabindex="-1" title="" value="1">
    <!-- select2 通过javascript end -->
</div>
<script type="text/javascript">
    // select2 通过数组数据生成
    var bkArr = [{ id: 0, text: '奥迪' }, { id: 1, text: '奔驰' }, { id: 2, text: '宝马' }] ;
    $("#{{$id}} .select2_box").select2({ data: bkArr });
</script>
