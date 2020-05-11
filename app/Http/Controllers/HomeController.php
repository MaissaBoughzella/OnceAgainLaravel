<?php namespace App\Http\Controllers;
//use App\Http\Controllers\Auth;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Collection;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		
	}


	public function searching(Request $request){

		$q = $request->input('q');
		$products=Product::where('Name','like','%'.$q.'%')->paginate(2);
		return view('searching',compact('products'));

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$products=DB::table('products')->where('user_FK',Auth::user()->id)->get();
		return view('create',compact('products'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Product::create($request->except(['_token','_method']));
		$products=DB::table('products')->where('user_FK',Auth::user()->id)->get();
		return redirect( "home");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($idp)
	{  
		
		$products=DB::table('products')->where('Id_prod',$idp)->get();
		return view('upProd',compact('products','user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	 public function update(Request $request,$idp)
    {  
		$products=Product::where('Id_prod',$idp)->update($request->except(['_token','_method']));
		return redirect( "home");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($idp)
	{
		$products=DB::table('products')->where('Id_prod',$idp);
		$products->delete();
    	return Redirect::back();
	}

	
}
