<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- 若您需要使用Kendo UI Professional，请联系版权人获得合法的授权或许可。 -->
    <!-- Bootstrap css -->
    {{--<link href="https://magicbox.bk.tencent.com/static_api/v3/assets/bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- kendo ui css -->
    <link href="{{asset('css/kendo.common.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/kendo.default.min.css')}}" rel="stylesheet">
    <!-- font-awesome -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!--蓝鲸提供的公用样式库 -->
    <link href="{{asset('css/bk.css')}}" rel="stylesheet">
    <link href="{{asset('css/bk_pack.css')}}" rel="stylesheet">
    <!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
    <script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
    <!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
    <script src="{{asset('js/echarts-all.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- 包括所有kendoui的js插件或者可以根据需要使用的js插件调用　-->
    <script src="{{asset('js/kendo.all.min.js')}}"></script>
    <script src="{{asset('js/bk.js')}}"></script>
    <!-- 数据埋点统计 -->
    <script src="{{asset('js/analysis.js')}}"></script>
    <!-- 以下两个插件用于在IE8以及以下版本浏览器支持HTML5元素和媒体查询，如果不需要用可以移除 -->
    <!--[if lt IE 9]><script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/html5shiv.min.js"></script><script src="https://magicbox.bk.tencent.com/static_api/v3/assets/js/respond.min.js"></script><![endif]-->
</head>

<body class="bg-white" data-bg-color="bg-white">
<div class="king-page-box">
    <div class="king-layout1-header">
        <nav role="navigation" class="navbar navbar-default king-horizontal-nav2 king-horizontal-info   f14 ">
            <div class="container " style="width:100%;overflow:hidden;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle-sm" data-toggle="collapse" data-target="#king-horizontal-nav2-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="javascript:;">
                       数据库作业 </a>
                </div>
                <div class="collapse navbar-collapse navbar-responsive-collapse" id="king-horizontal-nav2-collapse">
                    <ul class="nav navbar-nav">
                        <li class="king-navbar-active"><a href="javascript:void(0);">首页</a></li>
                        <li><a href="javascript:void(0);">作业一</a></li>
                        <li><a href="javascript:void(0);">作业二</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="javascript:;">
                                <span>管理者</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="king-layout2-main mt15" style="width:960px;">
        <div class="king-instruction  king-instruction-info ">
            <h5>提示说明</h5>
            <p>您可以设置应用运行时的环境变量，在进行测试部署和正式部署操作时会生效</p>
        </div>
        <div class="king-widget2  m0">
            <div class="king-widget2-content p30">
                <div class="row no-space">
                    <div class="col-sm-6">
                        <div class="king-counter king-counter-lg">
                            <span class="king-counter-number">2019-04-17</span>
                            <div class="king-counter-label text-uppercase">当前日期</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="king-counter king-counter-lg">
                            <span class="king-counter-number">66</span>
                            <div class="king-counter-label text-uppercase">距离暑假（2019\07\15）的天数</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 设置面板Start -->
        <!-- 设置面板End -->
        <div class="king-instruction  king-instruction-info ">
            <h5>提示说明</h5>
            <p>您可以设置应用运行时的环境变量，在进行测试部署和正式部署操作时会生效</p>
        </div>
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 面板标题 </div>
            <div class="panel-body">
                <button type="button" class="king-btn mr10  king-success">新增</button>
                <table class="table mb0 pr15 ranger-box2  ">
                    <thead>
                    <tr>
                        <th style="width: 70px;">#</th>
                        <th style="width: 15%;">名称</th>
                        <th style="width: 15%;">位置</th>
                        <th style="width: 15%;">日期</th>
                        <th style="width: 15%;">类型</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="width: 70px;">1</td>
                        <td style="width: 15%;">Ravi Kumar</td>
                        <td style="width: 15%;">India</td>
                        <td style="width: 15%;">23/12/2012</td>
                        <td style="width: 15%;">Paid</td>
                        <td>
                            <button class="btn btn-xs btn-success"> <i class="glyphicon glyphicon-ok"></i> </button>
                            <button class="btn btn-xs btn-warning"> <i class="glyphicon glyphicon-edit"></i> </button>
                            <button class="btn btn-xs btn-danger"> <i class="glyphicon glyphicon-remove"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 70px;">2</td>
                        <td style="width: 15%;">Ravi Kumar</td>
                        <td style="width: 15%;">India</td>
                        <td style="width: 15%;">23/12/2012</td>
                        <td style="width: 15%;">Paid</td>
                        <td>
                            <button class="btn btn-xs btn-success"> <i class="glyphicon glyphicon-ok"></i> </button>
                            <button class="btn btn-xs btn-warning"> <i class="glyphicon glyphicon-edit"></i> </button>
                            <button class="btn btn-xs btn-danger"> <i class="glyphicon glyphicon-remove"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 70px;">3</td>
                        <td style="width: 15%;">Ravi Kumar</td>
                        <td style="width: 15%;">India</td>
                        <td style="width: 15%;">23/12/2012</td>
                        <td style="width: 15%;">Paid</td>
                        <td>
                            <button class="btn btn-xs btn-success"> <i class="glyphicon glyphicon-ok"></i> </button>
                            <button class="btn btn-xs btn-warning"> <i class="glyphicon glyphicon-edit"></i> </button>
                            <button class="btn btn-xs btn-danger"> <i class="glyphicon glyphicon-remove"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 70px;">4</td>
                        <td style="width: 15%;">Ravi Kumar</td>
                        <td style="width: 15%;">India</td>
                        <td style="width: 15%;">23/12/2012</td>
                        <td style="width: 15%;">Paid</td>
                        <td>
                            <button class="btn btn-xs btn-success"> <i class="glyphicon glyphicon-ok"></i> </button>
                            <button class="btn btn-xs btn-warning"> <i class="glyphicon glyphicon-edit"></i> </button>
                            <button class="btn btn-xs btn-danger"> <i class="glyphicon glyphicon-remove"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 70px;">5</td>
                        <td style="width: 15%;">Ravi Kumar</td>
                        <td style="width: 15%;">India</td>
                        <td style="width: 15%;">23/12/2012</td>
                        <td style="width: 15%;">Paid</td>
                        <td>
                            <button class="btn btn-xs btn-success"> <i class="glyphicon glyphicon-ok"></i> </button>
                            <button class="btn btn-xs btn-warning"> <i class="glyphicon glyphicon-edit"></i> </button>
                            <button class="btn btn-xs btn-danger"> <i class="glyphicon glyphicon-remove"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 70px;">6</td>
                        <td style="width: 15%;">Ravi Kumar</td>
                        <td style="width: 15%;">India</td>
                        <td style="width: 15%;">23/12/2012</td>
                        <td style="width: 15%;">Paid</td>
                        <td>
                            <button class="btn btn-xs btn-success"> <i class="glyphicon glyphicon-ok"></i> </button>
                            <button class="btn btn-xs btn-warning"> <i class="glyphicon glyphicon-edit"></i> </button>
                            <button class="btn btn-xs btn-danger"> <i class="glyphicon glyphicon-remove"></i> </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <template id="header_tpl_15554966135012">
                    <tr>
                        <th style="width: 70px;">#index#</th>
                        <th style="width: 15%;">#name#</th>
                        <th style="width: 15%;">#position#</th>
                        <th style="width: 15%;">#date#</th>
                        <th style="width: 15%;">#type#</th>
                        <th>操作</th>
                    </tr>
                </template>
                <template id="tpl_15554966135012">
                    <tr>
                        <td style="width: 70px;">#index#</td>
                        <td style="width: 15%;">#name#</td>
                        <td style="width: 15%;">#position#</td>
                        <td style="width: 15%;">#date#</td>
                        <td style="width: 15%;">#type#</td>
                        <td>
                            {{--<button class="btn btn-xs btn-success"> <i class="glyphicon glyphicon-ok"></i> </button>--}}
                            <button class="btn btn-xs btn-warning"> 编辑 </button>
                            <button class="btn btn-xs btn-danger"> 删除 </button>
                        </td>
                    </tr>
                </template>
                <!-- 设置面板End -->
            </div>
        </div>
        <div class="panel panel-default mb0">
            <div class="panel-heading"> 面板标题 </div>
            <div class="panel-body">
                <form class="form-vertical p15">
                    <div class="form-group ">
                        <label>参数：</label>
                        <input type="text" class="form-control" id="" placeholder="提示信息"> </div>
                    <div class="form-group ">
                        <label>参数：</label>
                        <select class="form-control">
                            <option value="选择项1">选择项1</option>
                            <option value="选择项2">选择项2</option>
                            <option value="选择项3">选择项3</option>
                            <option value="选择项4">选择项4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="king-btn mr10  king-success">提交</button>
                        <button type="button" class="king-btn king-default ">取消</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        function renderTpl(str, cfg) {
            var re = /(#(.+?)#)/g;

            return str.replace(re, function() {
                var val = cfg[arguments[2]]+'';
                if(typeof val == 'undefined') {
                    val = '';
                }
                return val;
            });
        }

        // 异步请求后台数据
        $.ajax({
            url: 'https://magicbox.bk.tencent.com/static_api/v3/components/table7/data.json',
            type: 'GET',
            success: function(res){
                var _html = ' ';
                var list = res.items;
                var tpl = $('#tpl_15554966135012').html();
                var headerTpl =  $('#header_tpl_15554966135012').html();
                for (var i=0,len=list.length; i < len; i++){
                    var item = list[i];
                    _html += renderTpl(tpl, item)
                }
                $('.ranger-box2 tbody').html(_html);
                $('.ranger-box2 thead').html(renderTpl(headerTpl,res.catalogues));
            }
        });
    });
</script>
</body>

</html>
