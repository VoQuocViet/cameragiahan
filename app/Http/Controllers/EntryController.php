<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Cate;
use App\Http\Requests\ProductRequest;
use App\Product;
use Input,File,DB;
use App\ProductImage;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller {

	// Hệ Client
	public function getEntryListForNewsCate($entryid){
		$entryList = DB::table('entries')->where('news_cates_id',$entryid)->get();
		return view('tin-tuc',compact('entryList'));
	}
	public function getEntryListForSolution(){
		$entryList = DB::table('entries')->where('news_cates_id', 3)->get();
		return view('tin-tuc',compact('entryList'));
	}
	public function getEntryListForProject(){
		$entryList = DB::table('entries')->where('news_cates_id', 4)->get();
		return view('tin-tuc',compact('entryList'));
	}
	public function getEntryListForService(){
		$entryList = DB::table('entries')->where('news_cates_id', 5)->get();
		return view('tin-tuc',compact('entryList'));
	}
	public function getAllEntry(){
		$entryList = DB::table('entries')->get();
		return view('admin.entry.list',compact('entryList'));
	}
}
