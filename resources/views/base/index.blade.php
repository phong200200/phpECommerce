@extends('base.page')
@section('basecontent')
<div class="inject-content">
    <!-- 
  Body Section 
        Variable[
            'thisCate' => null,
            'title' => 'Index',
            'products' => $this -> productservices -> getAll(),
            'categories' => $this -> categoryservices -> getAllCategories(),
            'currentcate' => $this -> currentCate,
            'newcart' => Session('cart')
        ]

        @if($thisCate === null)
            <span>All Categories</span>
            @foreach($categories as $cate)
                <li><a href="/cate/{{$cate -> id}}">{{$cate -> name}}</a></li>
            @endforeach
        @else
            <span>{{$thisCate -> name}}</span>
            <li><a href="/">All</a></li>
            @foreach($categories as $cate)
                <li><a href="/cate/{{$cate -> id}}">{{$cate -> name}}</a></li>
            @endforeach
        @endif
  -->
    <div class="row">
        <div id="sidebar" class="span3">
            <div class="well well-small">
                <ul class="nav nav-list">
                    @if($thisCate === null)
                    <span>All Categories</span>
                    @foreach($categories as $cate)
                    <li><a class="icon-chevron-right" href="/cate/{{$cate -> id}}">{{$cate -> name}}</a></li>
                    @endforeach
                    @else
                    <span>Current Category: {{$thisCate -> name}}</span>
                    <li><a class="icon-chevron-right" href="/">All</a></li>
                    @foreach($categories as $cate)
                    <li><a href="/cate/{{$cate -> id}}"><span class="icon-chevron-right"></span>{{$cate -> name}}</a>
                    </li>
                    @endforeach
                    @endif

                    <li style="border:1"> &nbsp;</li>
                </ul>
            </div>

            <div class="well well-small alert alert-warning cntr">
                <h2>50% Discount</h2>
                <p>
                    only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
                </p>
            </div>
            <div class="well well-small"><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a>
            </div>

            <a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
            <br>
            <br>
            <br>
            <br>

        </div>
        <div class="span9">
            <div class="well np">
                <div id="myCarousel" class="carousel slide homCar">
                    <div class="carousel-inner">
                        @for ($i = 0; $i < 4; $i++) <div class="item">
                            <img style="width:100%" src="{{$products[$i] -> linkimg}}"
                                alt="bootstrap ecommerce templates">
                            <div class="carousel-caption">
                                <h4>Name: {{$products[$i] -> name}}</h4></br>
                                <p><span>Category:{{$products[$i] -> category_id}}</span></p>
                            </div>
                    </div>
                    @endfor
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
        <!--
  New Products
  -->
        <div class="well well-small">
            <h3>New Products</h3>
            <hr class="soften" />
            <div class="row-fluid">
                <div id="newProductCar" class="carousel slide">
                    <div class="carousel-inner">

                        <div class="item active">
                            <ul class="thumbnails">
                                @foreach($thefournewestprod as $item)
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="/product/details/{{$item -> id}}" title="add to cart">
                                            <span class="icon-search">
                                            </span> QUICK VIEW
                                        </a>
                                        <a href="#" class="tag"></a>
                                        <a href="#"><img src="{{$item -> linkimg}}" alt="bootstrap-ring"></a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="item">
                            <ul class="thumbnails">
                                <!-- @for ($i = 0; $i < 4; $i++) -->
                                @foreach($newproducts as $item)
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="/product/details/{{$item -> id}}"
                                            title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                                        <a href="/product/details/{{$item -> id}}"><img src="{{$item -> linkimg}}"
                                                alt=""></a>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                    <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
                    <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
                </div>
            </div>
            <div class="row-fluid">
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="/product/details/{{$item -> id}}" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="/product/details/{{$item -> id}}"><img src="assets/img/b.jpg" alt=""></a>
                            <div class="caption cntr">
                                <p>Manicure & Pedicure</p>
                                <p><strong> $22.00</strong></p>
                                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Add to Wish List </a>
                                    <a class="pull-left" href="#"> Add to Compare </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="/product/details/{{$item -> id}}" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="/product/details/{{$item -> id}}"><img src="assets/img/c.jpg" alt=""></a>
                            <div class="caption cntr">
                                <p>Manicure & Pedicure</p>
                                <p><strong> $22.00</strong></p>
                                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Add to Wish List </a>
                                    <a class="pull-left" href="#"> Add to Compare </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="/product/details/{{$item -> id}}" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="/product/details/{{$item -> id}}"><img src="assets/img/a.jpg" alt=""></a>
                            <div class="caption cntr">
                                <p>Manicure & Pedicure</p>
                                <p><strong> $22.00</strong></p>
                                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Add to Wish List </a>
                                    <a class="pull-left" href="#"> Add to Compare </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--
      Featured Products
      -->
        <div class="well well-small">
            <h3><a class="btn btn-mini pull-right" href="products.html" title="View more">VIew More<span
                        class="icon-plus"></span></a> Featured Products </h3>
            <hr class="soften" />
            <div class="row-fluid">
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="/product/details/{{$item -> id}}" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="/product/details/{{$item -> id}}"><img src="assets/img/d.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Manicure & Pedicure</h5>
                                <h4>
                                    <a class="defaultBtn" href="/product/details/{{$item -> id}}"
                                        title="Click to view"><span class="icon-zoom-in"></span></a>
                                    <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
                                    <span class="pull-right">$22.00</span>
                                </h4>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="/product/details/{{$item -> id}}" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="/product/details/{{$item -> id}}"><img src="assets/img/e.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Manicure & Pedicure</h5>
                                <h4>
                                    <a class="defaultBtn" href="/product/details/{{$item -> id}}"
                                        title="Click to view"><span class="icon-zoom-in"></span></a>
                                    <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
                                    <span class="pull-right">$22.00</span>
                                </h4>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="/product/details/{{$item -> id}}" title="add to cart"><span
                                    class="icon-search"></span> QUICK VIEW</a>
                            <a href="/product/details/{{$item -> id}}"><img src="assets/img/f.jpg" alt="" /></a>
                            <div class="caption">
                                <h5>Manicure & Pedicure</h5>
                                <h4>
                                    <a class="defaultBtn" href="/product/details/{{$item -> id}}"
                                        title="Click to view"><span class="icon-zoom-in"></span></a>
                                    <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
                                    <span class="pull-right">$22.00</span>
                                </h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="well well-small">
            <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
            Popular Products
        </div>
        <hr>
        <div class="well well-small">
            <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
            Best selling Products
        </div>
    </div>
</div>

</div>

@endsection