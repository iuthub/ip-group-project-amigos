<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('main.index');
})->name('mainIndex');


//Menu Controllers
Route::get('/contact',[
	'uses'=>'ContactUsController@create']);

Route::post('/contact',[
	'uses'=>'ContactUsController@store',
	'as'=>'contact.store']);

Route::get('/menu', [
	'uses' => 'LunchMenusController@getUserLunch',
	'as' => 'getMenu'
]);
//Menu of admin
Route::get('admin/menu', [
	'uses' => 'LunchMenusController@getAdminLunch',
	'as' => 'adminGetMenu'
]);

Route::post('/admin/edit_menu',[
	'uses'=>'LunchMenusController@postCreateLunch',
	'as' => 'adminCreateLunch'
]);

//Auth Controllers
Auth::routes();



//Admin Controllers
Route::get('/admin', 'HomeController@index');




//Cateogry Controllers
Route::post('/admin/category/store', 'CategoryController@store')->name('storeCategory');
Route::get('/admin/category/createCategory', 'CategoryController@create')->name('createCategory');
