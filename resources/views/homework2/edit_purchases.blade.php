@extends('layouts.base',['array' => ['menu_3' => '1']])

@section('content')
    <div class="king-layout2-main mt15" style="width:960px;">
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 购买记录 purchase </div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label for="inputCount3">ID(不可修改）：</label>
                        <input type="text" class="form-control"  placeholder="###" name="id"
                               value="{{ isset($id) ? $id : '###'}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">顾客：</label>
                        <p></p>
                        <div class="plugin3_demo" id="selector_customer" style="display:inline-block;">
                            <!-- select2 通过javascript start -->
                            <div class="select2-container select2_box" id="s2id_autogen3" style="width:300px;">
                                <a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-4">奔驰</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a>
                                <label for="s2id_autogen4" class="select2-offscreen"></label>
                                <input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4">
                            </div>
                            <input type="hidden" class="select2_box" style="width: 300px; display: none;" tabindex="-1" title="" value="1">
                            <!-- select2 通过javascript end -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">员工：</label>
                        <p></p>
                        <div class="plugin3_demo" id="selector_employee" style="display:inline-block;">
                            <!-- select2 通过javascript start -->
                            <div class="select2-container select2_box" id="s2id_autogen3" style="width:300px;">
                                <a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-4">奔驰</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a>
                                <label for="s2id_autogen4" class="select2-offscreen"></label>
                                <input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4">
                            </div>
                            <input type="hidden" class="select2_box" style="width: 300px; display: none;" tabindex="-1" title="" value="1">
                            <!-- select2 通过javascript end -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">产品：</label>
                        <p></p>
                        <div class="plugin3_demo" id="selector_product" style="display:inline-block;">
                            <!-- select2 通过javascript start -->
                            <div class="select2-container select2_box" id="s2id_autogen3" style="width:300px;">
                                <a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-4">奔驰</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a>
                                <label for="s2id_autogen4" class="select2-offscreen"></label>
                                <input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4">
                            </div>
                            <input type="hidden" class="select2_box" style="width: 300px; display: none;" tabindex="-1" title="" value="1">
                            <!-- select2 通过javascript end -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">购买数量：</label>
                        <input type="number" class="form-control" name="qoh" placeholder="输入库存数量">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">总价格：</label>
                        <input type="number" class="form-control" name="qoh" placeholder="输入库存数量">
                    </div>
                    <div class="form-group">
                        <label for="inputCount3">购买时间：</label>
                        @include('shared._date_time_selector',['name' => 'last_visit_time'])
                    </div>
                    <div class="form-group">
                        <input type="button" class="king-btn king-success mr10" value="提交">
                        <input type="reset" class="king-btn king-default" value="取消">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <link href="https://magicbox.bk.tencent.com/static_api/v3/assets/select2-3.5.2/select2.css" rel="stylesheet">
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/jquery-1.10.2.min.js"></script>
    <script src="https://magicbox.bk.tencent.com/static_api/v3/assets/select2-3.5.2/select2.js"></script>
    <script type="text/javascript">
        // select2 通过数组数据生成
        var bkArr = [{ id: 0, text: '1' }, { id: 1, text: '2' }, { id: 2, text: '3' }] ;
        $("#selector_customer .select2_box").select2({ data: bkArr });
        $("#selector_employee .select2_box").select2({ data: bkArr });
        $("#selector_product .select2_box").select2({ data: bkArr });
    </script>
@stop
