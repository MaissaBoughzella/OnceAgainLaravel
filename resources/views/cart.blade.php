<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title> Once Again | Cart</title>

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
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
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
            <a href="{{url('welcome.blade.php')}}"><img src="{{asset('img/core-img/$_1.jpg')}}" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                <li class="active"><a href="{{url('')}}">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="http://localhost:8000/auth/login">Login</a></li>
					<li><a href="http://localhost:8000/auth/register">Register</a></li>
                    <li><a href="{{url('shop')}}">Shop</a></li>
					
                </ul>
            </nav>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Shopping Cart</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>State</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $product)
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="{{ URL::asset('img/product-img/'.$product->Image) }}" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>{{$product->Name}}</h5>
                                        </td>
                                        <td class="price">
                                            <span>{{$product->Prix}} DT</span>
                                        </td>
                                        <td class="State">
                                            <span>{{$product->Etat}} </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                        
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span>{{$product->Prix }} DT</span></li>
                                <li><span>delivery:</span>  <span> 8 DT</span></li>
                                <li><span>total:</span> <span>{{$product->Prix + 8 }} DT</span></li>
                            </ul>
                            <div class="payment-method">
                                <!-- Cash on delivery -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="cod" checked>
                                    <label class="custom-control-label" for="cod">Cash on Delivery</label>
                                </div>
                               
                            </div>
                        </div>

                    </div>
                    <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-12" style="margin-top:-25%; ">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Checkout</h2>
                            </div>

                            <form action="{{url('/cart')}}" method="post">
                                <div class="row" style="margin-left:7%;">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="first_name" id="first_name" value="" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="last_name" id="last_name" value="" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" required name="email" id="email" placeholder="Email" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <select class="w-100" name="country"id="country">
                                        <option value="usa">Nabeul</option>
                                        <option value="uk">Tunis</option>
                                        <option value="ger">Sousse</option>
                                    </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control mb-3" name="street_address" id="street_address" placeholder="Address" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" name="city" id="city" placeholder="Town" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="zipCode" id="zipCode" placeholder="Zip Code" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="number" class="form-control" name="phone_number"id="phone_number" min="0" placeholder="Phone No" value="">
                                    </div>
                                    <div class="cart-btn mt-150" >
                                <a href="" class="btn amado-btn "style="width:435px;margin-left:15px;">Checkout</a>
                            </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>

        
        @endforeach
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

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
    <script src="{{asset('scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/flot/jquery.flot.js" type="text/javascript')}}"></script>
        <script src="{{asset('scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/common.js')}}" type="text/javascript"></script>

</body>

</html>