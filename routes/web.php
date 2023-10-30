<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/goods/create', 'GoodsController@create')->name('goods.create');
Route::post('/goods/create', 'GoodsController@store')->name('goods.store');

Route::get('/bads/create', 'BadsController@create')->name('bads.create');
Route::post('/bads/create', 'BadsController@store')->name('bads.store');

// Route::get('/profile','HomeController@profile');

Route::get('/users/profile','UserController@profile')->name('users.profile');




Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UserController',['except' => ['show','create','store']]); 
    // Route::get('/users/','ProfileController@index')->name('admin.users');
 });

 
 Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    
    Route::get('/goods/index','GoodsController@index')->name('goods.index');

    Route::get('/goods/show/{id}','GoodsController@show')->name('goods.show');

    Route::get('/goods/edit/{id}','GoodsController@edit')->name('goods.edit');
    Route::post('/goods/update/{id}','GoodsController@update')->name('goods.update');

   Route::get('/goods/destroy/{id}','GoodsController@destroy')->name('goods.destroy');

});


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::get('/bads/index','BadsController@index')->name('bads.index');

    Route::get('/bads/show/{id}','BadsController@show')->name('bads.show');

    Route::get('/bads/edit/{id}','BadsController@edit')->name('bads.edit');
    Route::post('/bads/update/{id}','BadsController@update')->name('bads.update');

   Route::get('/bads/destroy/{id}','BadsController@destroy')->name('bads.destroy');

});
