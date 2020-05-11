<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Cart;
use DB;
use Session;

class productController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	
	public function index($idp)
	{
		$product=Product::where('Id_prod',$idp)->get();
		return view('produit',['product'=> $product ],compact('product'));
	}


	public function search(Request $request){

		$query = $request->input('query');
		$categories = Category::all();
		$product=Product::where('Name','like','%'.$query.'%')->get();
		return view('search-results',compact('categories','product'));
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
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
