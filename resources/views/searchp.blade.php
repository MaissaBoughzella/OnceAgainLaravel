<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Once Again | ADMIN</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/$_1.jpg">
    <link type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('css/theme.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('images/icons/css/font-awesome.css')}}" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i></a><a class="brand" href="{{url('')}}">Once Again</a>
                <div class="nav-collapse collapse navbar-inverse-collapse">
                   

                    
                    <ul class="nav pull-right">
                        <li><a href="#">Support </a></li>
                        <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/user.png" class="nav-avatar" />
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Your Profile</a></li>
                                <li><a href="#">Edit Profile</a></li>
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
            <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="{{url('/home')}}"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="{{url('/allProducts')}}"><i class="menu-icon icon-inbox"></i>All Products</a></li>
                                <li><a href="{{url('/allUsers')}}"><i class="menu-icon icon-inbox"></i> All Users</a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a href="http://localhost:8000/login"><i class="menu-icon icon-signin"></i>Login </a></li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    All Products</h3>
                            </div>
                            <div class="module-option clearfix">
                                <form action="{{url('searchProduct')}}" method="get">
                                <div class="input-append pull-left">
                                    <input type="text" class="span3" type="text" name="query" id="query" value = "Request::input('query')" placeholder="Filter by name...">
                                    <button type="submit" class="btn">
                                        <i class="icon-search"></i>
                                    </button>
                                </div>
                                </form>
                                
                            </div>
                            @foreach($products as $prod)
                            <div class="module-body">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="media user">
                                            <a class="media-avatar pull-left" href="#">
                                                <img src="{{ URL::asset('img/product-img/'.$prod->Image) }}">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-title">
                                                   {{$prod->Name}}
                                                </h3>
                                                <p>
                                                    <small class="muted">{{$prod->Prix}} DT</small></p>
                                                <div class="media-option btn-group shaded-icon">
                                                    <button class="btn btn-small">
                                                        <i class="icon-envelope"></i>
                                                    </button>
                                                    <button class="btn btn-small">
                                                        <i class="icon-share-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                @endforeach
                                <!--/.row-fluid-->
                                <br />
                                <div class="pagination pagination-centered">
                                    <ul>
                                    {!! $products->render() !!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <div class="footer">
        <div class="container">
        <p class="copywrite">
           Once Again__Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
        </p>
    </div>
    </div>
        <script src="{{asset('scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/flot/jquery.flot.js" type="text/javascript')}}"></script>
        <script src="{{asset('scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/common.js')}}" type="text/javascript"></script>
</body>
