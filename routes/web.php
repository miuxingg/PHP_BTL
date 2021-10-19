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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/create', 'ProductController@createProduct');
Route::get('/index', 
    [
        'as'=>'home',
        'uses'=>'ProductController@getHome',
    ]
);

Route::get('product', 
    [
        'as'=>'product',
        'uses'=>'ProductController@getProduct'
    ]
);

Route::get('product-detail', 
    [
        'as'=>'product-detail',
        'uses'=>'ProductController@getProductDetail'
    ]
);

Route::get('contact', 
    [
        'as'=>'contact',
        'uses'=>'ProductController@contact'
    ]
);

Route::get('blog', 
    [
        'as'=>'blog',
        'uses'=>'ProductController@blog'
    ]
);

Route::get('about', 
    [
        'as'=>'about',
        'uses'=>'ProductController@about'
    ]
);
