<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="/cart/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/cart/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/cart/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="/cart/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/cart/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/cart/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/cart/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/cart/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/cart/css/style.css" type="text/css">
</head>

<body>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                    <a href="#" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt" data-title="English">
                                English</option>
                            <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="#">
                                <img src="/cart/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <form action="#" class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    @if($newcart != null)
                                    <span id="span-total-cart">{{ $newcart -> totalQuantity}}</span>
                                    @else
                                    <span>0</span>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
	<div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="text-align: center">Product</th>
                    <th style="text-align: center">Photo</th>
                    <th style="text-align: center">Price</th>
                    <th style="text-align: center">Quantity</th>
                    <th style="text-align: center" class="text-center">Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($newcart->products as $item)
                    <tr>
                        <td data-th="Product" style="text-align: center">
                            <h4 class="nomargin">{{$item['productInfo'] -> name}}</h4>
                        </td>
                        <td data-th="Price" style="text-align: center">
                            <img style="width:160px;height:160px" class="justify-content-center align-content-center img-responsive" src="{{$item['productInfo'] -> linkimg}}" alt="..." />
                        </td>
                        <td data-th="Price" style="text-align: center">
                            {{number_format($item['productInfo'] -> price)}} VNĐ
                        </td>
                        
                        <td data-th="Quantity" style="text-align: center">
                            <input class="inp" onchange="onthischange()" id="keluugiuthongtin" data-price="{{ $item['productInfo'] -> price}}" type="number" name="quantities" value="{{$item['quantity']}}" min="1" style="width: 50px;" />
                        </td>
                        <td data-th="Subtotal" id="subtt" style="text-align: center" class="text-center">{{number_format($item['productInfo'] -> price * $item['quantity'])}} VNĐ</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="visible-xs col-xs-3">
                    <td class="text-center"><strong>Total 1.99</strong></td>
                </tr>
                <tr>
                    <td class="hidden-xs text-center">
                        <h4>
                            <strong>Total: {{$newcart  -> totalPrice}}VNĐ</strong>
                        </h3>
                    </td>
                    <td colspan="3" class="hidden-xs"></td>
                    <td class="float-right">
                        <a href="/shopping/order/get">
                            <button class="btn btn-success">Confirm</button>
                        </a>
                        </form>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.inp').on('change', function(){
                $(this).innerHTML = $("#keluugiuthongtin").data("price")*$("#keluugiuthongtin").val();
            });
        });
        $(document).ready(function () {
            console.log('asdasd');
            var selected = document.getElementById("list");
            var selectedVal = selected.value;
            var jsonString = $('#data').html();
            $('#DeliveryPrice').val(selectedVal);
            var i = (parseInt(selectedVal) + parseInt(jsonString));
            $('#total-money').text(String(i).replace(/(.)(?=(\d{3})+$)/g, '$1,'));
            $('#totalPrice').val(parseInt(selectedVal) + parseInt(jsonString));
            $('#delivery').val($("#list option:selected").attr('id'));
        })
        function changeFunction() {
            console.log('asdasd');
            var selected = document.getElementById("list");
            var selectedVal = selected.value;
            var jsonString = $('#data').html();
            $('select').on('change', function () {
                $('#DeliveryPrice').val(selectedVal);
                var i = (parseInt(selectedVal) + parseInt(jsonString));
                $('#total-money').text(String(i).replace(/(.)(?=(\d{3})+$)/g, '$1,'));
                $('#totalPrice').val(parseInt(selectedVal) + parseInt(jsonString));
                $('#delivery').val($("#list option:selected").attr('id'));
            });
        }
    </script>
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="/cart/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="/cart/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="/cart/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="/cart/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="/cart/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="/cart/img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://www.facebook.com/thuy.huynhvan" target="_blank">Huynh Van Thuy</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="/cart/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="/cart/js/jquery-3.3.1.min.js"></script>
    <script src="/cart/js/bootstrap.min.js"></script>
    <script src="/cart/js/jquery-ui.min.js"></script>
    <script src="/cart/js/jquery.countdown.min.js"></script>
    <script src="/cart/js/jquery.nice-select.min.js"></script>
    <script src="/cart/js/jquery.zoom.min.js"></script>
    <script src="/cart/js/jquery.dd.min.js"></script>
    <script src="/cart/js/jquery.slicknav.js"></script>
    <script src="/cart/js/owl.carousel.min.js"></script>
    <script src="main.js"></script>
</body>

</html>