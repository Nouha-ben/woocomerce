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
Route::get('/', function () {
    return view('login');
});

Route::post('/connect','HomeController@connect');
Route::get('/logout','HomeController@logout');

Route::get('/home', 'HomeController@home');

Route::get('/products','ProductController@liste');
Route::get('/products/create','ProductController@create');
Route::post('/products/add','ProductController@add');
Route::get('/products/edit/{id}','ProductController@edit');
Route::post('/products/update','ProductController@update');
Route::delete('/products/delete','ProductController@delete');
Route::get('/products/excel','ProductController@excel');

Route::get('/orders','OrderController@liste');
Route::get('/orders/edit/{id}','OrderController@edit');
Route::post('/orders/update','OrderController@update');
Route::get('/orders/excel','OrderController@excel');

