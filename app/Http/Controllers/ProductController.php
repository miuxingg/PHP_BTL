<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    // Tao 1 san pham
    public function createProduct(){
        $products = new Products;
        $products->idCategory = 1;
        $products->idSize = 1;
        $products->name = 'Ao khoac';
        $products->desc = 'Ao khoac long vu sieu ben';
        $products->gender = false;
        $products->quantity = 20;
        $products->unitPrice = 500000;
        $products->image = 'https://localbrand.vn/wp-content/uploads/2020/12/ao-hoodie-cua-local-brand-2.jpg';
        $products->save();
    }

    public function getHome(){
        // $products = Products::find(1);
        return view('page.home');
    }

    public function getProduct(){
        return view('page.product');
    }

    public function getProductDetail(){
        return view('page.product-detail');
    }

    public function contact(){
        return view('page.contact');
    }

    public function blog(){
        return view('page.blog');
    }

    public function about(){
        return view('page.about');
    }
}
