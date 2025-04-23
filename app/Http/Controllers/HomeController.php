<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function listProducts(){

        $products= Product::all();
        $product_imgs = ProductImage::all();
        return view('Frontend.home',['products' => $products, 'product_imgs' => $product_imgs]);

    }

    public function home(){

        $products = Product::all();
        return view('Frontend.home',compact('products'));
    }

    public function productList(){
        $products = Product::all();
        $product_imgs = ProductImage::all();
        return view('Frontend.product.productlist', ['products' => $products, 'product_imgs' => $product_imgs]);
    }


    public function menu(){
        return view('layouts.menu');
    }

    public function footer(){
        return view('layouts.footer');
    }

    public function test(){
        return view('Frontend.test');
    }

    public function product(){
        return view('Frontend.selectProduct');
    }

}
