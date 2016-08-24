<?php namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Product;
use App\Cate;
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
		$hot_product_list = Product::select('id','name','alias','price','price_old','price_agency','promote_percent','intro','content','image','keywords','description','user_id','cate_id')->orderBy('id','DESC')->where('classify',1)->get()->toArray();
		$new_product_list = Product::select('id','name','alias','price','price_old','price_agency','promote_percent','intro','content','image','keywords','description','user_id','cate_id')->orderBy('id','DESC')->where('classify',2)->get()->toArray();
		return view('index', compact('new_product_list','hot_product_list'));
// 		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hot_product_list = Product::select('id','name','alias','price','price_old','price_agency','promote_percent','intro','content','image','keywords','description','user_id','cate_id')->orderBy('id','DESC')->where('classify',1)->get()->toArray();
		$new_product_list = Product::select('id','name','alias','price','price_old','price_agency','promote_percent','intro','content','image','keywords','description','user_id','cate_id')->orderBy('id','DESC')->where('classify',2)->get()->toArray();
		return view('index', compact('new_product_list','hot_product_list'));
	}


}
