<?php namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Input;
//use App\Http\Controllers\Request;
class allProductsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products=DB::table('products')->paginate(4);
		return view('allProducts',compact('products'));
	}

	public function search(Request $request){

		$query = $request->input('query');
		$products=Product::where('Name','like','%'.$query.'%')->paginate(2);
		return view('searchp',compact('products'));

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idp)
	{   
		
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
		return view('update-products',compact('products'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
	 */
	public function update(Request $request,$idp)
    {   

		DB::table('products')->where('Id_prod',$idp)->update($request->except(['_token','_method']));
		//dd($request->all());
		return redirect( "allProducts");
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
		//$products = Product::find($idp);
    	$products->delete();
    	return Redirect::back();

	}




}
