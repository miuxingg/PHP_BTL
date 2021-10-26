<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Cart;
use App\Models\Colors;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Sizes;
use App\Models\Slide;
use Illuminate\Support\Facades\Session;


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
        $slide = Slide::all();
        $products = Products::paginate(8);
        return view('page.home', compact('slide', 'products'));
    }

    public function getProduct($type){
        if($type==0){
            $productByCate = Products::all();
        return view('page.product', compact('productByCate'));
        }
        $productByCate = Products::where('idCategory', $type)->get();
        return view('page.product', compact('productByCate'));
    }

    public function getProductDetail(Request $req){
        $product = Products::where('id', $req->id)->first();
        $sizes = Sizes::where('idProduct', $req->id)->get();
        $colors = Colors::where('idProduct', $req->id)->get();
        return view('page.product-detail', compact('product', 'sizes', 'colors'));
    }

    public function getAddToCart(Request $req){
        dd($req->all());
        // $req->session()->put('key', 'value');
        // echo $req->session()->all();
        // $product = Products::find($id);
        // $currentCart = Session('cart') ? Session::get('cart') : null;
        // $cart = new Cart($currentCart);
        // $cart->add($product, $id);
        // $req->session()->put('cart', $cart);
        // print_r($req->all());
        // return redirect()->back();
    }

}
