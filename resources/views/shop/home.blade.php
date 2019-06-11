<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" type="text/css" href={{asset("css/normalize.css")}}/>
    <link rel="stylesheet" type="text/css" href={{asset("css/default.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("css/styles.css")}}>

</head>
<body>
<div id="wrapper">
    <div class="cart-icon-top">
    </div>

    <div class="cart-icon-bottom">
    </div>

    <div id="checkout">
        CHECKOUT
    </div>

    <div id="info">
        <p class="i1">MARTINPOTTER SHOP</p>
        <p>
            <a class="htmleaf-icon icon-htmleaf-home-outline"  href="http://www.martinpotter.cn/" title="MARTINPOTTER" target="_blank"><span> MARTINPOTTER</span></a> | <a class="htmleaf-icon icon-htmleaf-arrow-forward-outline" href="{{route('index')}}" title="返回首页" target="_blank"><span> 返回首页</span></a></p>
    </div>

    <div id="header">
        <ul>
            <li><a href="{{route('index')}}">首页</a></li>
            <li><a href="{{route('shop')}}">作业演示</a></li>
            <li><a href="https://www.martinpotter.cn">个人博客</a></li>
        </ul>
    </div>

    <div id="sidebar">
        <h3>购物车</h3>
        <div id="cart">
            <span class="empty">空 无 一 物.</span>
        </div>

        <!--{{--<h3>CATEGORIES</h3>--}}
        {{--<div class="checklist categories">--}}
            {{--<ul>--}}
                {{--<li><a href=""><span></span>New Arivals</a></li>--}}
                {{--<li><a href=""><span></span>Accesories</a></li>--}}
                {{--<li><a href=""><span></span>Bags</a></li>--}}
                {{--<li><a href=""><span></span>Dressed</a></li>--}}
                {{--<li><a href=""><span></span>Jackets</a></li>--}}
                {{--<li><a href=""><span></span>jewelry</a></li>--}}
                {{--<li><a href=""><span></span>Shoes</a></li>--}}
                {{--<li><a href=""><span></span>Shirts</a></li>--}}
                {{--<li><a href=""><span></span>Sweaters</a></li>--}}
                {{--<li><a href=""><span></span>T-shirts</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{--<h3>COLORS</h3>--}}
        {{--<div class="checklist colors">--}}
            {{--<ul>--}}
                {{--<li><a href=""><span></span>Beige</a></li>--}}
                {{--<li><a href=""><span style="background:#222"></span>Black</a></li>--}}
                {{--<li><a href=""><span style="background:#6e8cd5"></span>Blue</a></li>--}}
                {{--<li><a href=""><span style="background:#f56060"></span>Brown</a></li>--}}
                {{--<li><a href=""><span style="background:#44c28d"></span>Green</a></li>--}}
            {{--</ul>--}}

            {{--<ul>--}}
                {{--<li><a href=""><span style="background:#999"></span>Grey</a></li>--}}
                {{--<li><a href=""><span style="background:#f79858"></span>Orange</a></li>--}}
                {{--<li><a href=""><span style="background:#b27ef8"></span>Purple</a></li>--}}
                {{--<li><a href=""><span style="background:#f56060"></span>Red</a></li>--}}
                {{--<li><a href=""><span style="background:#fff;border: 1px solid #e8e9eb;width:13px;height:13px;"></span>White</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{--<h3>SIZES</h3>--}}
        {{--<div class="checklist sizes">--}}
            {{--<ul>--}}
                {{--<li><a href=""><span></span>XS</a></li>--}}
                {{--<li><a href=""><span></span>S</a></li>--}}
                {{--<li><a href=""><span></span>M</a></li>--}}
            {{--</ul>--}}

            {{--<ul>--}}
                {{--<li><a href=""><span></span>L</a></li>--}}
                {{--<li><a href=""><span></span>XL</a></li>--}}
                {{--<li><a href=""><span></span>XXL</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{--<h3>PRICE RANGE</h3>--}}
        {{--<img src={{asset("img/price-range.png")}} alt="" />--}}
        -->
    </div>

    <div id="grid-selector">
        <div id="grid-menu">
            View:
            <ul>
                <li class="largeGrid"><a href=""></a></li>
                <li class="smallGrid"><a class="active" href=""></a></li>
            </ul>
        </div>

        Showing 1–6 of 6 results
    </div>

    <div id="grid">
        @foreach($products as $item)
            <div class="product">
                <div class="info-large">
                    <h4>{{$item->pname}}</h4>
                    <div class="sku">
                        <strong>产品编号</strong>
                        <span>{{$item->id}}</span>
                    </div>

                    <div class="price-big">
                        <span>${{$item->original_price}}</span> ${{$item->original_price*(1-$item->discnt_rate)}}
                    </div>

                    <h3>供应商</h3>
                    <div class="colors-large">
                        <span>{{$supplier[$item->sid]['sname']}}</span>
                    </div>

                    <h3>库存</h3>
                    <div class="sizes-large">
                        {{$item->qoh}}
                    </div>

                    <a  href="{{route('purchase', ['id'=>$item->id])}}"><button class="add-cart-large">立即购买</button></a>


                </div>

                <div class="make3D">
                    <div class="product-front">
                        <div class="shadow"></div>
                        <img src={{asset("img/".$item->pname."1.jpg")}} alt="" />
                        <div class="image_overlay"></div>
                        <a  href="{{route('purchase', ['id'=>$item->id])}}"><div class="add_to_cart">立即购买</div></a>



                        <div class="view_gallery">浏览大图</div>
                        <div class="stats">
                            <div class="stats-container">
                                <span class="product_price">${{$item->original_price*(1-$item->discnt_rate)}}</span>
                                <span class="product_name">{{$item->pname}}</span>
                                <p>剩余库存： {{$item->qoh}}</p>

                                <div class="product-options">
                                    <strong>提示</strong>
                                    <span>演示用demo，点击加入购物车结账</span>
                                    <strong>供应商</strong>
                                    <span>{{$supplier[$item->sid]['sname']}}</span>
                                    {{--<strong>COLORS</strong>--}}
                                    {{--<div class="colors">--}}
                                    {{--<div class="c-blue"><span></span></div>--}}
                                    {{--<div class="c-red"><span></span></div>--}}
                                    {{--<div class="c-white"><span></span></div>--}}
                                    {{--<div class="c-green"><span></span></div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-back">
                        <div class="shadow"></div>
                        <div class="carousel">
                            <ul class="carousel-container">
                                <li><img src={{asset("img/".$item->pname."1.jpg")}} alt="" /></li>
                                <li><img src={{asset("img/".$item->pname."2.jpg")}} alt="" /></li>
                                <li><img src={{asset("img/".$item->pname."3.jpg")}} alt="" /></li>
                            </ul>
                            <div class="arrows-perspective">
                                <div class="carouselPrev">
                                    <div class="y"></div>
                                    <div class="x"></div>
                                </div>
                                <div class="carouselNext">
                                    <div class="y"></div>
                                    <div class="x"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-back">
                            <div class="cy"></div>
                            <div class="cx"></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach



    </div>
</div>

<script src={{asset("js/jquery-2.1.1.min.js")}}></script>
<script src={{asset('js/stopExecutionOnTimeout.js?t=1')}}></script>
<script src={{asset("js/classie.js")}}></script>
<script src={{asset("js/uiMorphingButton_fixed.js")}}></script>
<script type="text/javascript" src={{asset("js/main.js")}}></script>
</body>
</html>
