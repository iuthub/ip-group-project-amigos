<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('main.index');
})->name('mainIndex');

Route::get('/contact',[
	'uses'=>'ContactUsController@create']);

Route::post('/contact',[
	'uses'=>'ContactUsController@store',
	'as'=>'contact.store']);

Route::get('/menu', [
	'uses' => 'LunchMenusController@getUserLunch',
	'as' => 'getMenu'
]);

Route::get('admin/menu', [
	'uses' => 'LunchMenusController@getAdminLunch',
	'as' => 'adminGetMenu'
]);

Route::post('/admin/edit_menu',[
	'uses'=>'LunchMenusController@postCreateLunch',
	'as' => 'adminCreateLunch'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



