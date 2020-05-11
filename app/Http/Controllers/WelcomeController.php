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

class WelcomeController extends Controller {

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
	public function index()
	{
		
		$categories = Category::all();
		return view('welcome',compact('categories'));
		

	}
	public function search(Request $request){

		$query = $request->input('query');
		$categories = Category::all();
		$product=Product::where('Name','like','%'.$query.'%')->get();
		return view('search-results',compact('categories','product'));

}
}