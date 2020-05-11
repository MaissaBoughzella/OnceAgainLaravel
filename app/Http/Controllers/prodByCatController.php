<?php namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Category;
use App\Product;


class prodByCatController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index($id)
	{
	
    $categories = Category::all();
    $category = Category::find($id);
	$product=DB::table('products')->where('category_FK',$id)->paginate(4);
	
		return view('prodByCat',compact(['categories','product','category']));
	
		
	}

	public function search(Request $request){

		$query = $request->input('query');
		$categories = Category::all();
		$product=Product::where('Name','like','%'.$query.'%')->get();
		return view('search-results',compact('categories','product'));
	}

	public function store(Request $request){
		$selectValue = $request->input('select');
		$categories = Category::all();
		$products=DB::table('products')->orderby('created_at', 'desc')->paginate(4);
		return view('new',compact(['categories','products']));

	}
	
	public function pricecheap(request $request){
		
		$categories = Category::all();
		$products=DB::table('products')->orderby('Prix', 'asc')->paginate(4);
		return view('cheap',compact(['categories','products']));

	}
	public function pricehigh(request $request){
		$categories = Category::all();
		$products=DB::table('products')->orderby('Prix', 'desc')->paginate(4);
		return view('hight',compact(['categories','products']));

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


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {


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
	public function update( $id)
{
 
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
