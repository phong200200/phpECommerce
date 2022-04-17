<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="/template/new/css/bootstrap.css" rel="stylesheet" />
    <!-- Customize styles -->
    <link href="/template/new/style.css" rel="stylesheet" />
    <!-- font awesome styles -->
    <link href="/template/new/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

    <!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

    <!-- Favicons -->
    <link rel="shortcut icon" href="/template/new/ico/favicon.ico">
</head>

<body>
    <!-- 
	Upper Header Section 
-->
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
                    <a href="/"> <span class="icon-home"></span> Home</a>
                    <a href="#"><span class="icon-user"></span> My Account</a>
                    <a href="register.html"><span class="icon-edit"></span> Free Register </a>
                    <a href="contact.html"><span class="icon-envelope"></span> Contact us</a>
                    <a class="active" href="cart.html"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a>
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
                        <a class="logo" href="/"><span>Twitter Bootstrap ecommerce template</span>
                            <img src="/template/new/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
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
                    <span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
                    <span class="btn btn-warning btn-mini">$</span>
                    <span class="btn btn-mini">&pound;</span>
                    <span class="btn btn-mini">&euro;</span>
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
                            <li class=""><a href="index.html">Home </a></li>
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
        <!-- 
Body Section 
-->
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                    <li class="active">Check Out</li>
                </ul>
                <div class="well well-small">
                    <h1>Check Out <small class="pull-right"> 2 Items are in the cart </small></h1>
                    <hr class="soften" />
                    <div id="list-cart">
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Avail.</th>
                                    <th>Unit price</th>
                                    <th>Qty </th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($newcart != null)
                                @foreach($newcart -> products as $item)
                                <tr>
                                    <td><img width="100" src="{{ $item['productInfo'] -> linkimg }}" alt=""></td>
                                    <td>{{$item['productInfo'] -> name}}<br>Category: {{$item['productInfo'] -> category_id}}</td>
                                    @if($item['productInfo'] -> active)
                                    <td><span class="shopBtn"><span class="icon-ok"></span></span> </td>
                                    @else
                                    <td><span class="shopBtn"><span class="icon-remove"></span></span> </td>
                                    @endif
                                    <td id="item-price" data-val="{{$item['productInfo']->price}}">{{number_format($item['productInfo'] -> price)}}đ</td>
                                    <td>
                                        <input class="span1 cart-item" onchange="ChangeCartItemQty(this)" style="max-width:34px" placeholder="1" size="16" type="text" value="{{$item['quantity']}}">
                                        <div class="input-append">
                                            <button class="btn" type="button">-</button>
                                            <button class="btn" type="button"> + </button>
                                            <button class="btn btn-danger" onclick="DeleteItemFromList({{$item['productInfo']->id}})" type="button"><span class="icon-remove"></span></button>
                                        </div>
                                    </td>
                                    <td id="co-cart-total">$100.00</td>
                                </tr>
                                @endforeach
                                @else
                                <h4>There's nothing in your cart</h4>
                                @endif
                                @if($newcart != null)
                                <tr>
                                    <td colspan="6" class="alignR">Total products: </td>
                                    <td class="label label-primary"> {{$newcart->totalPrice}}</td>
                                </tr>
                                @endif


                            </tbody>
                        </table>
                    </div>
                    <br />

                    <a href="products.html" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
                    <a href="login.html" class="shopBtn btn-large pull-right">Next <span class="icon-arrow-right"></span></a>

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
                    <a href="#"><img alt="" src="/template/new/img/1.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="/template/new/img/2.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="/template/new/img/3.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="/template/new/img/4.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="/template/new/img/5.png"></a>
                </div>
                <div class="span2">
                    <a href="#"><img alt="" src="/template/new/img/6.png"></a>
                </div>
            </div>
        </section>

        <!--
Footer
-->
        <footer class="footer">
            <div class="row-fluid">
                <div class="span2">
                    <h5>Your Account</h5>
                    <a href="#">YOUR ACCOUNT</a><br>
                    <a href="#">PERSONAL INFORMATION</a><br>
                    <a href="#">ADDRESSES</a><br>
                    <a href="#">DISCOUNT</a><br>
                    <a href="#">ORDER HISTORY</a><br>
                </div>
                <div class="span2">
                    <h5>Iinformation</h5>
                    <a href="contact.html">CONTACT</a><br>
                    <a href="#">SITEMAP</a><br>
                    <a href="#">LEGAL NOTICE</a><br>
                    <a href="#">TERMS AND CONDITIONS</a><br>
                    <a href="#">ABOUT US</a><br>
                </div>
                <div class="span2">
                    <h5>Our Offer</h5>
                    <a href="#">NEW PRODUCTS</a> <br>
                    <a href="#">TOP SELLERS</a><br>
                    <a href="#">SPECIALS</a><br>
                    <a href="#">MANUFACTURERS</a><br>
                    <a href="#">SUPPLIERS</a> <br />
                </div>
                <div class="span6">
                    <h5>The standard chunk of Lorem</h5>
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                    those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                    Malorum" by Cicero are also reproduced in their exact original form,
                    accompanied by English versions from the 1914 translation by H. Rackham.
                </div>
            </div>
        </footer>
    </div>
    <!-- /container -->

    <div class="copyright">
        <div class="container">
            <p class="pull-right">
                <a href="#"><img src="/template/new/img/maestro.png" alt="payment"></a>
                <a href="#"><img src="/template/new/img/mc.png" alt="payment"></a>
                <a href="#"><img src="/template/new/img/pp.png" alt="payment"></a>
                <a href="#"><img src="/template/new/img/visa.png" alt="payment"></a>
                <a href="#"><img src="/template/new/img/disc.png" alt="payment"></a>
            </p>
            <span>Copyright &copy; 2013<br> bootstrap ecommerce shopping template</span>
        </div>
    </div>
    <a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/template/new/js/jquery.js"></script>
    <script src="/template/new/js/bootstrap.min.js"></script>
    <script src="/template/new/js/jquery.easing-1.3.min.js"></script>
    <script src="/template/new/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="/template/new/js/shop.js"></script>
    <script src="/template/admin/js/main.js"></script>
</body>

</html>