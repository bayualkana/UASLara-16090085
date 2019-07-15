<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function(){
    Route::resource('Product', 'Admin\ProdukController');
});

Route::get('/produk/{id}', 'Admin\ProdukController@destroy')->name('HapusProduk');

Route::get('/contact', 'HomeController@contact')->name('Contact');

Route::get('/user', 'HomeController@showUser');
Route::get('/comments', 'HomeController@showComment');
Route::get('/tambah', 'HomeController@create');
Route::resource('/produk', 'Produk');