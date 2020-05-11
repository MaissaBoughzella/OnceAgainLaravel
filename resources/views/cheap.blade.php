
     <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title> Once Again | SHOP</title>

        <!-- Favicon  -->
        <link rel="icon" href="{{asset('img/core-img/$_1.jpg')}}">

<!-- Core Style CSS -->
<link rel="stylesheet" href="{{ asset('css/core-style.css') }}">

<link rel="stylesheet" href="{{ asset('scss/style.scss') }}">
<link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<script src="{{ asset('js/jquery.min.js') }}"> </script>
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
                <a href="{{url('')}}"><img src="img/core-img/$_1.jpg" alt=""></a>
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
                <a href="{{url('')}}"><img src="img/core-img/$_1.jpg" alt=""></a>
                
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="{{url('')}}">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="http://localhost:8000/auth/login">Login</a></li>
					<li><a href="http://localhost:8000/auth/register">Register</a></li>
                    <li><a href="{{url('shop')}}">Shop</a></li>
					<li><a href="#">Cart</a></li>
					
                   
                </ul>
            </nav>
            
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
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

        <div class="shop_sidebar_area">

            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Categories</h6>

                <!--  Catagories  -->
                
                <div class="catagories-menu">
                    <ul>
                    @foreach($categories as $category)
                        <li><a href="{{ url('/shop/'.$category->id) }}">{{$category->Name}}</a></li>
                        
                    @endforeach    
                    </ul>
                </div>
                
            </div>


            <!-- ##### Single Widget ##### -->
            <div class="widget price mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Price</h6>

                <div class="catagories-menu">
                <ul>
                    <li><a href="{{ url('/cheap') }}">Low to high</a></li>
                    <li><a href="{{ url('/high') }}">High to low</a></li>
                </ul>
                </div>
            </div>
        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!-- Total Products -->
                            <div class="total-products">
                                <p>Showing 1-8 0f 25</p>
                                <div class="view d-flex">
                                    <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Sorting -->
                            <div class="product-sorting d-flex">
                            <div class="sort-by-date d-flex align-items-center mr-15">
                                    <p>Sort by</p>
                                    <form method="get" action="{{url('new')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <select name="select" style="width:100px">
                                        <option value="old">Oldest</option>
                                    </select>  
                                   
                                   <input  class="btn btn-light" type="submit" value="Sort" />  
                                   
                               </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                
                @foreach($products as $prod)

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/{{$prod->Image}}" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">{{$prod->Prix}} DT</p>
                                    
                                    <a href="{{ url('/product/'.$prod->Id_prod) }}">
                                    <h6>{{$prod->Name}}</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                        <a href="cart.html" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    
                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                            {!! $products->render() !!}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- ##### Newsletter Area Start ##### -->
  <section class="newsletter-area section-padding-100-0" style="width:100%;">
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
                            <a href="index.html"><img src="img/core-img/logoimg.png" alt=""></a>
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

</body>

</html>
