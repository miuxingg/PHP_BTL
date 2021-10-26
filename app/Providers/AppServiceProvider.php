<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Categorys;
use App\Http\Middleware\Cart;
use Illuminate\Support\Facades\Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('page.home', function($view){
            $category = Categorys::all();
            $view->with('category', $category);
        });
        view()->composer('page.product', function($view){
            $category = Categorys::all();
            $view->with('category', $category);
        });
        view()->composer('header', function($view){
            if(Session('cart')){
                $currentCart = Session::get('cart');
                $cart = new Cart($currentCart);
                $view-with(['cart' => Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
            }
        });
    }
}
