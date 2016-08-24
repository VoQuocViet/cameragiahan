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

Route::get('/',['as'=>'index','uses'=>'HomeController@index']);
Route::get('index',['as'=>'index','uses'=>'HomeController@index']);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('gioi-thieu',function () { return view('gioi-thieu'); });
Route::get('bao-hanh',function () { return view('gioi-thieu'); });
Route::get('lien-he',function () { return view('lien-he'); });

// Route::get('category',['as'=>'category','uses'=>'CateController@getHierarchicalCates']);
Route::get('danh-muc/{id?}/{name?}',['as'=>'category','uses'=>'CateController@getHierarchicalCates']);
Route::get('danh-muc/{id}/{cate}/{name}',['as'=>'category','uses'=>'CateController@getHierarchicalCates']);
Route::get('danh-muc/{id}/{cate1}/{cate2}/{name}',['as'=>'category','uses'=>'CateController@getHierarchicalCates']);
Route::get('san-pham/{id}/{name}',['as'=>'san-pham','uses'=>'ProductController@getProduct']);

Route::get('tin-tuc/{id}/{name}',['as'=>'tin-tuc','uses'=>'EntryController@getEntryListForNewsCate']);
Route::get('giai-phap',['as'=>'tin-tuc','uses'=>'EntryController@getEntryListForSolution']);
Route::get('dich-vu',['as'=>'tin-tuc','uses'=>'EntryController@getEntryListForProject']);
Route::get('du-an',['as'=>'tin-tuc','uses'=>'EntryController@getEntryListForService']);
// ROUTE FOR ADMIN SITE

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
	// ROUTE FOR CATEGORY
	Route::group(['prefix'=>'cate'],function (){
		Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
	});
	Route::group(['prefix'=>'newscate'],function (){
		Route::get('list',['as'=>'admin.newscate.list','uses'=>'NewsCateController@getList']);
		Route::get('add',['as'=>'admin.newscate.getAdd','uses'=>'NewsCateController@getAdd']);
		Route::post('add',['as'=>'admin.newscate.postAdd','uses'=>'NewsCateController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.newscate.getDelete','uses'=>'NewsCateController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.newscate.getEdit','uses'=>'NewsCateController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.newscate.postEdit','uses'=>'NewsCateController@postEdit']);
	});
	// ROUTE FOR PRODUCT
	Route::group(['prefix'=>'product','middleware'=>'auth'],function (){
		Route::get('list',['as'=>'admin.product.list','uses'=>'ProductController@getList']);
		Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
		Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
		Route::get('delimg/{id}',['as'=>'admin.product.getDelImg','uses'=>'ProductController@getDelImg']);
	});
	// ROUTE FOR ENTRY
	Route::group(['prefix'=>'entry','middleware'=>'auth'],function (){
		Route::get('list',['as'=>'admin.entry.list','uses'=>'EntryController@getAllEntry']);
		Route::get('add',['as'=>'admin.entry.getAdd','uses'=>'EntryController@getAdd']);
		Route::post('add',['as'=>'admin.entry.postAdd','uses'=>'EntryController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.entry.getDelete','uses'=>'EntryController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.entry.getEdit','uses'=>'EntryController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.entry.postEdit','uses'=>'EntryController@postEdit']);
		Route::get('delimg/{id}',['as'=>'admin.entry.getDelImg','uses'=>'EntryController@getDelImg']);
	});
		// ROUTE FOR USER
	Route::group(['prefix'=>'user','middleware'=>'auth'],function (){
		Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@getList']);
		Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
	});
});

