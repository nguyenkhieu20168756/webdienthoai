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
Route::get('/',['uses'=>'HomeController@index','as'=>'index']);

Route::get('product/brand/{id}',['uses'=>'HomeController@show','as'=>'brand.product']);

Route::get('product/id/{id}',['uses'=>'ProductController@show','as'=>'product.detail']);

Route::get('product/category/{id}',['uses'=>'CategoryController@show','as'=>'product.category']);

Route::get('register',['uses'=>'CustomerSignUp@index','as'=>'register']);

Route::post('register',['uses'=>'CustomerSignUp@index','as'=>'handle.register']);

Route::get('login',['uses'=>'CustomerSignIn@index','as'=>'login']);

Route::post('login',['uses'=>'CustomerSignIn@index','as'=>'handle.login']);

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


//Admin login
Route::group(['prefix'=>'admin'],function(){
    // Dashboard
	Route::get('dashboard',['uses'=>'DashboardController@index','as'=>'dashboard']);
    // Category
    Route::group(['prefix'=>'category'],function(){
        Route::get('list',['uses'=>'CategoryController@index','as'=>'category.list']);
        
        Route::get('edit/{id}',['uses'=>'CategoryController@edit','as'=>'category.edit.form']);

		Route::post('edit/{id}',['uses'=>'CategoryController@update','as'=>'category.edit']);

        Route::get('add',['uses'=>'CategoryController@create','as'=>'category.add.form']);

        Route::post('add',['uses'=>'CategoryController@store','as'=>'category.add']);
        
        Route::get('delete/{id}',['uses'=>'CategoryController@destroy','as'=>'category.delete']);

        Route::get('disable/{id}',['uses'=>'CategoryController@disable','as'=>'category.disable']);

        Route::get('enable/{id}',['uses'=>'CategoryController@enable','as'=>'category.enable']);

        Route::get('/back', function () {
            return redirect()->route('category.list');
        })->name('category.back');
    });
    // Slide
    Route::group(['prefix'=>'slide'],function(){
        Route::get('list',['uses'=>'SlideController@index','as'=>'slide.list']);
        
        Route::get('edit/{id}',['uses'=>'SlideController@edit','as'=>'slide.edit.form']);

		Route::post('edit/{id}',['uses'=>'SlideController@update','as'=>'slide.edit']);

        Route::get('add',['uses'=>'SlideController@create','as'=>'slide.add.form']);

        Route::post('add',['uses'=>'SlideController@store','as'=>'slide.add']);
        
        Route::get('delete/{id}',['uses'=>'SlideController@destroy','as'=>'slide.delete']);

        Route::get('disable/{id}',['uses'=>'SlideController@disable','as'=>'slide.disable']);

        Route::get('enable/{id}',['uses'=>'SlideController@enable','as'=>'slide.enable']);
    });
    // Article
    Route::group(['prefix'=>'article'],function(){
        Route::get('list',['uses'=>'ArticleController@index','as'=>'article.list']);
        
        Route::get('edit/{id}',['uses'=>'ArticleController@edit','as'=>'article.edit.form']);

		Route::post('edit/{id}',['uses'=>'ArticleController@update','as'=>'article.edit']);

        Route::get('add',['uses'=>'ArticleController@create','as'=>'article.add.form']);

        Route::post('add',['uses'=>'ArticleController@store','as'=>'article.add']);
        
        Route::get('delete/{id}',['uses'=>'ArticleController@destroy','as'=>'article.delete']);

        Route::get('/back', function () {
            return redirect()->route('article.list');
        })->name('article.back');
    });
    // Promotion
    Route::group(['prefix'=>'promotion'],function(){
        Route::get('list',['uses'=>'PromotionController@index','as'=>'promotion.list']);
        
        Route::get('edit/{id}',['uses'=>'PromotionController@edit','as'=>'promotion.edit.form']);

		Route::post('edit/{id}',['uses'=>'PromotionController@update','as'=>'promotion.edit']);

        Route::get('add',['uses'=>'PromotionController@create','as'=>'promotion.add.form']);

        Route::post('add',['uses'=>'PromotionController@store','as'=>'promotion.add']);
        
        Route::get('delete/{id}',['uses'=>'PromotionController@destroy','as'=>'promotion.delete']);

        Route::get('/back', function () {
            return redirect()->route('promotion.list');
        })->name('promotion.back');
    });
    // Comment
    Route::group(['prefix'=>'comment'],function(){
        Route::get('list',['uses'=>'CommentController@index','as'=>'comment.list']);
        
        Route::get('edit/{id}',['uses'=>'CommentController@edit','as'=>'comment.edit.form']);

        Route::get('delete/{id}',['uses'=>'CommentController@destroy','as'=>'comment.delete']);
	});
    // Order
	Route::group(['prefix'=>'order'],function(){
        Route::get('list',['uses'=>'OrderController@index','as'=>'order.list']);
        
        Route::get('edit/{id}',['uses'=>'OrderController@edit','as'=>'order.edit.form']);

		Route::post('edit/{id}',['uses'=>'OrderController@update','as'=>'order.edit']);
        
        Route::get('delete/{id}',['uses'=>'OrderController@destroy','as'=>'order.delete']);

        Route::get('/back', function () {
            return redirect()->route('order.list');
        })->name('order.back');
	});
    // Product
	Route::group(['prefix'=>'product'],function(){
        Route::get('list',['uses'=>'ProductController@index','as'=>'product.list']);
        
        Route::get('edit/{id}',['uses'=>'ProductController@edit','as'=>'product.edit.form']);

		Route::post('edit/{id}',['uses'=>'ProductController@update','as'=>'product.edit']);

        Route::get('add',['uses'=>'ProductController@create','as'=>'product.add.form']);

        Route::post('add',['uses'=>'ProductController@store','as'=>'product.add']);
        
        Route::get('delete/{id}',['uses'=>'ProductController@destroy','as'=>'product.delete']);

        Route::get('disable/{id}',['uses'=>'ProductController@disable','as'=>'product.disable']);

        Route::get('enable/{id}',['uses'=>'ProductController@enable','as'=>'product.enable']);

        Route::get('/back', function () {
            return redirect()->route('product.list');
        })->name('product.back');
    });
    // Producer
    Route::group(['prefix'=>'producer'],function(){
        Route::get('list',['uses'=>'ProducerController@index','as'=>'producer.list']);
        
        Route::get('edit/{id}',['uses'=>'ProducerController@edit','as'=>'producer.edit.form']);

		Route::post('edit/{id}',['uses'=>'ProducerController@update','as'=>'producer.edit']);

        Route::get('add',['uses'=>'ProducerController@create','as'=>'producer.add.form']);
        
        Route::post('add',['uses'=>'ProducerController@store','as'=>'producer.add']);

        Route::get('delete/{id}',['uses'=>'ProducerController@destroy','as'=>'producer.delete']);

        Route::get('/back', function () {
            return redirect()->route('producer.list');
        })->name('producer.back');
	});
    // Brand
    Route::group(['prefix'=>'brand'],function(){
        Route::get('list',['uses'=>'BrandController@index','as'=>'brand.list']);
        
        Route::get('edit/{id}',['uses'=>'BrandController@edit','as'=>'brand.edit.form']);

		Route::post('edit/{id}',['uses'=>'BrandController@update','as'=>'brand.edit']);

        Route::get('add',['uses'=>'BrandController@create','as'=>'brand.add.form']);
        
        Route::post('add',['uses'=>'BrandController@store','as'=>'brand.add']);

        Route::get('delete/{id}',['uses'=>'BrandController@destroy','as'=>'brand.delete']);

        Route::get('disable/{id}',['uses'=>'BrandController@disable','as'=>'brand.disable']);

        Route::get('enable/{id}',['uses'=>'BrandController@enable','as'=>'brand.enable']);

        Route::get('/back', function () {
            return redirect()->route('brand.list');
        })->name('brand.back');
	});
    // Customer
    Route::group(['prefix'=>'customer'],function(){
        Route::get('list',['uses'=>'CustomerController@index','as'=>'customer.list']);
        
        Route::get('edit/{id}',['uses'=>'CustomerController@edit','as'=>'customer.edit.form']);

		Route::post('edit/{id}',['uses'=>'CustomerController@update','as'=>'customer.edit']);
        
        Route::get('delete/{id}',['uses'=>'CustomerController@destroy','as'=>'customer.delete']);

        Route::get('disable/{id}',['uses'=>'CustomerController@disable','as'=>'customer.disable']);

        Route::get('enable/{id}',['uses'=>'CustomerController@enable','as'=>'customer.enable']);

        Route::get('/back', function () {
            return redirect()->route('customer.list');
        })->name('customer.back');
    });
});