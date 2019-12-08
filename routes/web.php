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
    return view('welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/adminhome', 'HomeController@adminindex')->name('adminhome.index');
Route::get('/adduser', 'HomeController@adduser')->name('adminhome.adduser');
Route::post('/adduser', 'HomeController@storeuser');

Route::get('/userlist', 'HomeController@userlist')->name('adminhome.userlist');

Route::get('/adminhome/edit/{id}', 'HomeController@edit')->name('adminhome.edit');
Route::post('/adminhome/edit/{id}', 'HomeController@update');
Route::get('/adminhome/delete/{id}', 'HomeController@deleteuser')->name('adminhome.delete');

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/addproduct', 'HomeController@addproduct')->name('home.addproduct');
Route::post('/addproduct', 'HomeController@storeproduct');
Route::get('/productlist', 'HomeController@productlist')->name('home.productlist');
Route::get('/home/edit/{id}', 'HomeController@editproduct')->name('home.edit');
Route::post('/home/edit/{id}', 'HomeController@updateproduct');
Route::get('/home/delete/{id}', 'HomeController@deleteproduct')->name('home.delete');