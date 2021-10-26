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
    return redirect('home');
});

// Route::get('/create', 'ProductController@createProduct');
Route::get('/home', 
    [
        'as'=>'home',
        'uses'=>'ProductController@getHome',
    ]
);

Route::get('product/{type}', 
    [
        'as'=>'product',
        'uses'=>'ProductController@getProduct'
    ]
);

Route::get('product-detail/{id}', 
    [
        'as'=>'product-detail',
        'uses'=>'ProductController@getProductDetail'
    ]
);

Route::get('contact', 
    [
        'as'=>'contact',
        'uses'=>'ContactController@contact'
    ]
);

Route::get('blog', 
    [
        'as'=>'blog',
        'uses'=>'BlogController@blog'
    ]
);

Route::get('about', 
    [
        'as'=>'about',
        'uses'=>'AboutController@about'
    ]
);

Route::get('shopping-cart', 
    [
        'as'=>'shopping-cartout',
        'uses'=>'ShoppingCart@shoppingCart'
    ]
);


Route::get('add-to-cart',
    [
        'as'=>'addToCart',
        'uses'=>'ProductController@getAddToCart'
    ]
);