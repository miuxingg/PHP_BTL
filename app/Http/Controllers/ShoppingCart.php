<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCart extends Controller
{
    public function shoppingCart(){
        return view('page.shopping-cart');
    }
}
