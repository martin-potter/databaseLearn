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
                <a class="navbar-brand" href="{{route('index')}}">
                    数据库作业 </a>
            </div>
            <div class="collapse navbar-collapse navbar-responsive-collapse" id="king-horizontal-nav2-collapse">
                <ul class="nav navbar-nav">
                    <li {{ isset($menu_1) ? 'class=king-navbar-active' : '' }}><a href="{{route('index')}}">首页</a></li>
                    <li {{ isset($menu_2) ? 'class=king-navbar-active' : '' }}><a href="{{route('hw1')}}">作业一</a></li>
                    <li {{ isset($menu_3) ? 'class=king-navbar-active' : '' }}><a href="{{route('hw2')}}">作业二</a></li>
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
