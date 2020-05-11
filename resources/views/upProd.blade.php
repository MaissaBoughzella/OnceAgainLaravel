<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Once Again | EDIT Product</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/$_1.jpg">
    <link type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('css/theme.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('images/icons/css/font-awesome.css')}}" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>  
   
<div class="container-fluid text-center">
@foreach($products as $products)    
<form class="form-horizontal" style="margin-left:40%;" action="{{url( '/user/'.$products->Id_prod )}}" method="POST">

<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                <input type="hidden" name="_method" value="PATCH">
                <h4>Update Product</h4><br>
              
                <div class="form-group">
                    <input type="hidden" name="user_FK" value="{{$products->user_FK}}"/>
                    <label for="title">Name</label>
                    <input type="text" name="Name" class="form-control" id="title" value="{{$products->Name}}">
                </div>
                <label for="exampleTextarea">Description</label>
                <textarea class="form-control" name="Description" id="exampleTextarea" rows="6" value="{{$products->Description}}"></textarea>
                <div class="form-group">
                    <label for="author" class="">State</label>
                    <input type="text" name="Etat" class="form-control" id="author" value="{{$products->Etat}}">
                </div>
                <div class="form-group">
                    <label for="category" class="">Price</label>
                    <input type="text" name="Prix" class="form-control" id="category" value="{{$products->Prix}}">
                </div>
                <div class="form-group">
                    <label for="category" class="">Category</label>
                    <input type="text" name="category_FK" class="form-control" id="category" value="{{$products->category_FK}}">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
                 
    </form>
        @endforeach      
</div>
     
         <script src="{{asset('scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/flot/jquery.flot.js" type="text/javascript')}}"></script>
        <script src="{{asset('scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('scripts/common.js')}}" type="text/javascript"></script>
</body>
</html>