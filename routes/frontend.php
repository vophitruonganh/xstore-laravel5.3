<?php
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::any('images/{image?}', function($image){
	return Response::make(File::get(storage_path().'/app/public/products/'.$image));
});
Route::group(['middleware' => 'web'],function(){
	Route::resource('collection','ProductController');
	Route::resource('collection/brands','BrandController');
	Route::resource('collection/category','CategoryController');

});
Route::get('/contact','ContactController@index');
Route::get('blog','BlogController@index');
Route::get('/','HomeController@index');