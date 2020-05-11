<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Once Again | Product Details</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('img/core-img/$_1.jpg')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/core-style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
    
    
    <link rel="stylesheet" href="scss/style.scss">    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <script src="{{asset('js/jquery.min.js') }}"> </script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/active.js')}}"></script>
    <script src="{{asset('fonts/')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                    <form action="{{url('search')}}" method="get">
                            <input type="text" name="query" id="query" value = "Request::input('query')" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="{{url('')}}"><img src="{{asset('img/core-img/$_1.jpg')}}" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="{{url('')}}"><img src="{{asset('img/core-img/$_1.jpg')}}" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active" style="font-weight:bold;"><a href="{{url('')}}">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="http://localhost:8000/auth/login">Login</a></li>
					<li><a href="http://localhost:8000/auth/register">Register</a></li>
                    <li><a href="{{url('shop')}}">Shop</a></li>

                    
                </ul>
            </nav>
      
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="#" class="fav-nav"><img src="{{asset('img/core-img/favorites.png')}}" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="{{asset('img/core-img/search.png')}}" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                @foreach($product as $product)
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url({{ URL::asset('img/product-img/'.$product->Image) }});">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url({{ URL::asset('img/product-img/'.$product->Image2) }});">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url({{ URL::asset('img/product-img/'.$product->Image3) }});">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url({{ URL::asset('img/product-img/'.$product->Image4) }});">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="{{ URL::asset('img/product-img/'.$product->Image) }}">
                                            <img class="d-block w-100" src="{{ URL::asset('img/product-img/'.$product->Image) }}" alt="First slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="{{ URL::asset('img/product-img/'.$product->Image2) }}">
                                            <img class="d-block w-100" src="{{ URL::asset('img/product-img/'.$product->Image2) }}" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="{{ URL::asset('img/product-img/'.$product->Image3) }}">
                                            <img class="d-block w-100" src="{{ URL::asset('img/product-img/'.$product->Image3) }}" alt="Third slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="{{ URL::asset('img/product-img/'.$product->Image4) }}">
                                            <img class="d-block w-100" src="{{ URL::asset('img/product-img/'.$product->Image4) }}" alt="Fourth slide">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">{{$product->Prix}} DT</p>
                               
                                    <h6>{{$product->Name}}</h6>
                                </a>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review">
                                        <a href="#">Write A Review</a>
                                    </div>
                                </div>
                                <!-- Avaiable -->
                                <p class="avaibility"><i class="fa fa-circle"></i> {{$product->Etat}}</p>
                            </div>

                            <div class="short_overview my-5">
                                <p>{{$product->Description}}</p>
                            </div>

                      
     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Product Details Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

     <!-- ##### Newsletter Area Start ##### -->
  <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
						<h2>Subscribe for a<span> 25% Discount.</span></h2>
						<p>Join now and get 25% off your next purchase!</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="{{asset('img/core-img/logoimg.png')}}" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        
                        <p class="copywrite">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
						</p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{url('')}}">Home</a>
                                        </li>
										<li class="nav-item">
                                            <a class="nav-link" href="#">About Us</a>
										</li>
										<li class="nav-item">
                                            <a class="nav-link" href="http://localhost:8000/auth/login">Login</a>
										</li>
										<li class="nav-item">
                                            <a class="nav-link" href="http://localhost:8000/auth/register">Register</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('shop')}}">Shop</a>
                                        </li>
                                       
                                       
										
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        'use strict';

    var $window = $(window);

    // :: 1.0 Masonary Gallery Active Code

    var proCata = $('.amado-pro-catagory');
    var singleProCata = ".single-products-catagory";

    if ($.fn.imagesLoaded) {
        proCata.imagesLoaded(function () {
            proCata.isotope({
                itemSelector: singleProCata,
                percentPosition: true,
                masonry: {
                    columnWidth: singleProCata
                }
            });
        });
    }

    // :: 2.1 Search Active Code
    var amadoSearch = $('.search-nav');
    var searchClose = $('.search-close');

    amadoSearch.on('click', function () {
        $('body').toggleClass('search-wrapper-on');
    });

    searchClose.on('click', function () {
        $('body').removeClass('search-wrapper-on');
    });

    // :: 2.2 Mobile Nav Active Code
    var amadoMobNav = $('.amado-navbar-toggler');
    var navClose = $('.nav-close');

    amadoMobNav.on('click', function () {
        $('.header-area').toggleClass('bp-xs-on');
    });

    navClose.on('click', function () {
        $('.header-area').removeClass('bp-xs-on');
    });

    // :: 3.0 ScrollUp Active Code
    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollSpeed: 1000,
            easingType: 'easeInOutQuart',
            scrollText: '<i class="fa fa-angle-up" aria-hidden="true"></i>'
        });
    }

    // :: 4.0 Sticky Active Code
    $window.on('scroll', function () {
        if ($window.scrollTop() > 0) {
            $('.header_area').addClass('sticky');
        } else {
            $('.header_area').removeClass('sticky');
        }
    });

    // :: 5.0 Nice Select Active Code
    if ($.fn.niceSelect) {
        $('select').niceSelect();
    }

    // :: 6.0 Magnific Active Code
    if ($.fn.magnificPopup) {
        $('.gallery_img').magnificPopup({
            type: 'image'
        });
    }

    // :: 7.0 Nicescroll Active Code
    if ($.fn.niceScroll) {
        $(".cart-table table").niceScroll();
    }

    // :: 8.0 wow Active Code
    if ($window.width() > 767) {
        new WOW().init();
    }

    // :: 9.0 Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // :: 10.0 PreventDefault a Click
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });

    // :: 11.0 Slider Range Price Active Code
    $('.slider-range-price').each(function () {
        var min = jQuery(this).data('min');
        var max = jQuery(this).data('max');
        var unit = jQuery(this).data('unit');
        var value_min = jQuery(this).data('value-min');
        var value_max = jQuery(this).data('value-max');
        var label_result = jQuery(this).data('label-result');
        var t = $(this);
        $(this).slider({
            range: true,
            min: min,
            max: max,
            values: [value_min, value_max],
            slide: function (event, ui) {
                var result = label_result + " " + unit + ui.values[0] + ' - ' + unit + ui.values[1];
                console.log(t);
                t.closest('.slider-range').find('.range-price').html(result);
            }
        });
    });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        var method;
    var noop = function noop() {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}()
    });
</script>

</body>

</html>

