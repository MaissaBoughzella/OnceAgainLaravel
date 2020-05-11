<?php namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Cart;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use DB;
use Session;
class ShopController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$categories = Category::all();
		$product=DB::table('products')->paginate(4);
		return view('shop',compact(['categories','product']));
		}

	public function search(Request $request){

		$query = $request->input('query');
		$categories = Category::all();
		$product=Product::where('Name','like','%'.$query.'%')->get();
		return view('search-results',compact('categories','product'));

	}
	public function sort(Request $request){

		$categories = Category::all();
		$sort = $request->get('sort', 'asc');
		$product = Product::orderBy('created_at',$request->sort ='ASC')->get();
		$product=Product::orderBy('created_at',$sort)->get();
		return view('shop-results',compact('product','categories','sort'));
}	

public function store(Request $request){
	$selectValue = $request->input('select');
	$categories = Category::all();
	$products=DB::table('products')->orderby('created_at', 'desc')->paginate(4);
	return view('new',compact(['categories','products']));

}
public function priceCheap(Request $request){
	$categories = Category::all();
	$products=DB::table('products')->orderby('Prix', 'asc')->paginate(4);
	return view('cheap',compact(['categories','products']));

}
public function pricehigh(Request $request){
	$categories = Category::all();
	$products=DB::table('products')->orderby('Prix', 'desc')->paginate(4);
	return view('hight',compact(['categories','products']));

}

}
