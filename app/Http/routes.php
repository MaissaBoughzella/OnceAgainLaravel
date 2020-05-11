<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/home',function() {
	if (Auth::user()->isAdmin == 0){

		$products=DB::table('products')->where('user_FK',Auth::user()->id)->get();
		return view('home',compact('products'));
		
	}
	else {
		$user['users']=\App\User::all();
		$products['products']=\App\Product::all();
		return view ('admin',$user,$products);
	}
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', 'WelcomeController@index');
Route::get('shop/', 'ShopController@index');
Route::get('shop/{id}', 'prodByCatController@index');
Route::get('product/{idp}', 'productController@index');

/**************CART ROUTES*************/
Route::get('/cart/{idp}', 'cartController@index');
Route::post('/cart', 'cartController@mail');

/**************SEARCH ROUTES*************/
Route::get('/search', 'ShopController@search');
Route::get('/search', 'prodByCatController@search');
Route::get('/search', 'WelcomeController@search');
Route::get('/search', 'productController@search');
Route::get('/searching', 'userController@searching');
//Route::get('/searchProduct', 'allProductsController@search');
Route::get('/searchUser', 'allUsersController@search');


/**************Sort ROUTES*************/
Route::get('/new', 'ShopController@store');
Route::get('/shop', 'ShopController@index');
Route::get('/new', 'prodByCatController@store');
Route::get('/cheap', 'ShopController@pricecheap');
Route::get('/high', 'ShopController@pricehigh');
Route::get('/cheap','prodByCatController@pricecheap');
Route::get('/high', 'prodByCatController@pricehigh');
Route::get('/allUsers', 'allUsersController@index');
Route::get('/allProducts', 'allProductsController@index');

/**************CRUD ROUTES*************/
Route::delete('/allUsers/{id}', 'allUsersController@destroy');
Route::delete('/allProducts/{idp}', 'allProductsController@destroy');
Route::get('/updateProducts/{idp}', 'allProductsController@edit');
Route::patch('/allProducts/{idp}', 'allProductsController@update');
Route::get('/create', 'HomeController@create');
Route::post('/user', 'HomeController@store');
//delete product for user
Route::delete('/user/{idp}', 'HomeController@destroy');
//update product for user
Route::get('/upProd/{idp}', 'HomeController@edit');
Route::patch('/user/{idp}', 'HomeController@update');




