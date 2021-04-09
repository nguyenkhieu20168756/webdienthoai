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

// Redirect to each page
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/introduce', function () {
    return view('introduce');
})->name('introduce');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/resetpwd', function () {
    return view('resetpwd');
})->name('resetpwd');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/product-detail', function () {
    return view('product-detail');
})->name('product-detail');

Route::get('/dashboard',['uses'=>'DashboardController@index','as'=>'dashboard']);
//Admin login
Route::group(['prefix'=>'admin'],function(){
	Route::get('dashboard',['uses'=>'DashboardController@index','as'=>'dashboard']);
	Route::group(['prefix'=>'orders'],function(){
        Route::get('list',['uses'=>'OrderController@index','as'=>'order.list']);
        
        Route::get('edit/{id}',['uses'=>'OrderController@edit','as'=>'order.edit.form']);

		Route::post('edit/{id}',['uses'=>'OrderController@update','as'=>'order.edit']);

        Route::get('add',['uses'=>'OrderController@addOrderForm','as'=>'order.add.form']);

        Route::post('add',['uses'=>'OrderController@store','as'=>'order.add']);
        
        Route::get('delete/{id}',['uses'=>'OrderController@destroy','as'=>'order.delete']);
	});
	Route::group(['prefix'=>'products'],function(){
        Route::get('list',['uses'=>'ProductController@index','as'=>'product.list']);
        
        Route::get('edit/{id}',['uses'=>'ProductController@edit','as'=>'product.edit.form']);

		Route::post('edit/{id}',['uses'=>'ProductController@update','as'=>'product.edit']);

        Route::get('add',['uses'=>'ProductController@addProductForm','as'=>'product.add.form']);

        Route::post('add',['uses'=>'ProductController@store','as'=>'product.add']);
        
        Route::get('delete/{id}',['uses'=>'ProductController@destroy','middleware' => ['role:admin|producer'],'as'=>'product.delete']);
    });
    Route::group(['prefix'=>'users'],function(){
        Route::get('list',['uses'=>'UserController@index','as'=>'user.list']);
        
        Route::get('edit/{id}',['uses'=>'UserController@edit','as'=>'user.edit.form']);

		Route::post('edit/{id}',['uses'=>'UserController@update','as'=>'user.edit']);

        Route::get('add',['uses'=>'UserController@addUserForm','as'=>'user.add.form']);
        
        Route::post('add',['uses'=>'UserController@store','as'=>'user.add']);

        Route::get('delete/{id}',['uses'=>'UserController@destroy','as'=>'user.delete']);
	});
});