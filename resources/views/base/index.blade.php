<!DOCTYPE html>
<html lang="en">

<head>
    @include('base.headdeclare')
</head>

<body>
    <!-- Header Section -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="topNav">
            <div class="container">
                <div class="alignR">
                    <div class="pull-left socialNw">
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-youtube"></span></a>
                        <a href="#"><span class="icon-tumblr"></span></a>
                    </div>
                    <a href="index.html"> <span class="icon-home"></span> Home</a>
                    <a href="#"><span class="icon-user"></span> My Account</a>
                    <a href="register.html"><span class="icon-edit"></span> Free Register </a>
                    <a href="contact.html"><span class="icon-envelope"></span> Contact us</a>
                    <a href="cart.html"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a>
                </div>
            </div>
        </div>
    </div>

    <!--
Lower Header Section 
-->
    <div class="container">
        <div id="gototop"> </div>
        <header id="header">
            <div class="row">
                <div class="span4">
                    <h1>
                        <a class="logo" href="index.html"><span>Twitter Bootstrap ecommerce template</span>
                            <img src="/assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
                        </a>
                    </h1>
                </div>
                <div class="span4">
                    <div class="offerNoteWrapper">
                        <h1 class="dotmark">
                            <i class="icon-cut"></i>
                            Twitter Bootstrap shopping cart HTML template is available @ $14
                        </h1>
                    </div>
                </div>
                <div class="span4 alignR">
                    <p><br> <strong> Support (24/7) : 0800 1234 678 </strong><br><br></p>
                    <span class="btn ">[ 2 ] <span class="icon-shopping-cart"></span></span>
                    <span class="btn btn-warning">$</span>
                    <span class="btn">&pound;</span>
                    <span class="btn ">&euro;</span>
                </div>
            </div>
        </header>

        <!--
Navigation Bar Section 
-->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="active"><a href="index.html">Home </a></li>
                            <li class=""><a href="list-view.html">List View</a></li>
                            <li class=""><a href="grid-view.html">Grid View</a></li>
                            <li class=""><a href="three-col.html">Three Column</a></li>
                            <li class=""><a href="four-col.html">Four Column</a></li>
                            <li class=""><a href="general.html">General Content</a></li>
                        </ul>
                        <form action="#" class="navbar-search pull-left">
                            <input type="text" placeholder="Search" class="search-query span2">
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
                                <div class="dropdown-menu">
                                    <form class="form-horizontal loginFrm">
                                        <div class="control-group">
                                            <input type="text" class="span2" id="inputEmail" placeholder="Email">
                                        </div>
                                        <div class="control-group">
                                            <input type="password" class="span2" id="inputPassword" placeholder="Password">
                                        </div>
                                        <div class="control-group">
                                            <label class="checkbox">
                                                <input type="checkbox"> Remember me
                                            </label>
                                            <button type="submit" class="shopBtn btn-block">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Body Section -->
        <div class="row">
            <div id="sidebar" class="span3">
                <div class="well well-small">
                    <ul class="nav nav-list">
                        @foreach($categories as $cate)
                        <li><a href="#"><span class="icon-chevron-right"></span>{{ $cate -> name }}</a></li>
                        @endforeach
                        <li><a href="#"><span class="icon-chevron-right"></span>See All Jewelry & Watches</a></li>
                        <li style="border:0"> &nbsp;</li>
                        <li> <a class="totalInCart" href="cart.html"><strong>Total Amount <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
                    </ul>
                </div>

                <div class="well well-small alert alert-warning cntr">
                    <h2>50% Discount</h2>
                    <p>
                        only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
                    </p>
                </div>
                <div class="well well-small"><a href="#"><img src="/assets/img/paypal.jpg" alt="payment method paypal"></a></div>

                <a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
                <br>
                <br>
                <ul class="nav nav-list promowrapper">
                    <li>
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                            <img src="/assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
                            <div class="caption">
                                <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
                            </div>
                        </div>
                    </li>
                    <li style="border:0"> &nbsp;</li>
                    <li>
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                            <img src="/assets/img/shopping-cart-template.png" alt="shopping cart template">
                            <div class="caption">
                                <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
                            </div>
                        </div>
                    </li>
                    <li style="border:0"> &nbsp;</li>
                    <li>
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                            <img src="/assets/img/bootstrap-template.png" alt="bootstrap template">
                            <div class="caption">
                                <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
            <div class="span9">
                <!-- 
New Products
-->
                <div class="well well-small">
                    @foreach($categories as $cate)
                    <h3>{{ $cate -> name}}</h3>
                    <div class="row-fluid">
                        <ul class="thumbnails">
                            @foreach($products as $item)
                            <li class="span4">
                                <div class="thumbnail">
                                    <a href="product_details.html" class="overlay"></a>
                                    <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                                    <a href="product_details.html"><img src="{{$item -> linkimg}}" alt="{{ $item -> name }}"></a>
                                    <div class="caption cntr">
                                        <p>Manicure & Pedicure</p>
                                        <p><strong> {{$item -> price}} Vnds</strong></p>
                                        <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                                        <div class="actionList">
                                            <a class="pull-left" href="#">Add to Wish List </a>
                                            <a class="pull-left" href="#"> Add to Compare </a>
                                        </div>
                                        <br class="clr">
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
        <!-- 
Clients 
-->
        <section class="our_client">
            <hr class="soften" />
            <h4 class="title cntr"><span class="text">Manufactures</span></h4>
            <hr class="soften" />
            <div class="row">
                <div class="span2">
                    <a href="#"><img alt="" src="/assets/img/1.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="/assets/img/2.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="/assets/img/3.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="/assets/img/4.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="/assets/img/5.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="/assets/img/6.png"></a>
                </div>
            </div>
        </section>

        <!--
Footer
-->
        @yield('basefooter')
        @include('base.footdeclare')
</body>

</html>