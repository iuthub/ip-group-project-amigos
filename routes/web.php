<?php

use Illuminate\Support\Facades\Route;

//Landing page
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

Route::post('/admin/menu/store',[
	'uses'=>'LunchMenusController@postCreateLunch',
	'as' => 'adminCreateLunch'
]);

Route::get('/admin/menu/create', 'LunchMenusController@create')->name('createMenu');
Route::get('/admin/menu/{id}/delete', 'LunchMenusController@delete')->name('deleteMenu');
Route::get('/admin/menu/{id}/edit', 'LunchMenusController@edit')->name('editMenu');
Route::post('/admin/menu/{id}/update', 'LunchMenusController@update')->name('updateMenu');

//Auth Controllers
Auth::routes();

//Admin Controllers
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin/user/{id}/delete', 'HomeController@userDelete')->name('userDelete');
Route::get('/admin/user/{id}/makeadmin', 'HomeController@userAdmin')->name('userAdmin');

//Cateogry Controllers

Route::get('/admin/category/allCategories', 'CategoryController@index')->name('allCategories');
Route::get('/admin/category/createCategory', 'CategoryController@create')->name('createCategory');
Route::post('/admin/category/store', 'CategoryController@store')->name('storeCategory');
Route::get('/admin/category/{id}/edit','CategoryController@edit')->name('editCategory');
Route::post('admin/category/{id}/update', 'CategoryController@update')->name('updateCategory');
Route::get('/admin/category/{id}/delete', 'CategoryController@delete')->name('deleteCategory');
Route::get('/admin/category/{id}/categoryMenu', 'CategoryController@categoryMenu')->name('categoryMenu');

//Order
Route::get('/order/myOrders', 'OrderController@myOrders')->name('myOrders');
Route::get('/order/{id}/', 'OrderController@index')->name('order');
Route::get('/order/cancel/{id}/', 'OrderController@cancel')->name('cancelOrder');
Route::post('/order/confirm/', 'OrderController@confirmOrder')->name('confirmOrder');



Route::get('/menu/search',[
	'uses' => 'LunchMenusController@userSearch',
	'as' => 'userSearchMenu'
]);

Route::get('/menu/admin/search',[
	'uses' => 'LunchMenusController@userSearch',
	'as' => 'adminSearchMenu'
]);

// Route::get('/menu/search', 'LunchMenuesController@index');
Route::get('/admin/category/{id}/categoryMenu', 'CategoryController@categoryMenu')->name('categoryMenu');

//Admin order pages
Route::get('/admin/order/', 'OrderAdminController@index')->name('adminOrderPage');
Route::get('/admin/order/delivered/{id}', 'OrderAdminController@delivered')->name('delivered');
Route::get('/admin/order/cancel/{id}', 'OrderAdminController@cancel')->name('adminOrderCancel');


