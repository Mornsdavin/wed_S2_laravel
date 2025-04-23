<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function list(){

        $products= Product::all();
        $product_imgs = ProductImage::all();
        return view('admin.phones.phone',['products' => $products, 'product_imgs' => $product_imgs]);
    }

    public function showDetail($id){
        $product = Product::where('id', $id)->first();
        $productImg = ProductImage::where('product_id', $product->id)->first(); 
        return view('Frontend.product.product_detail', ['product' => $product, 'productImg' => $productImg]);
    }

    public function OrderStore($id){
        $product = Product::where('id', $id)->first();
        $productImg = ProductImage::where('product_id', $product->id)->first();
        return view('Frontend.product.form_order', ['product' => $product, 'productImg' => $productImg]);
    }

    public function create(){

        return view('admin.phones.components.add_phone');
    }

    public function store(ProductRequest $request){
        $p = Product::create([
            'product_code'  => $request->get('product_code'),
            'product_name'  => $request->get('product_name'),
            'storage'       => $request->get('storage'),
            'display'       => $request->get('display'),
            'ram'           => $request->get('ram'),
            'processor'     => $request->get('processor'),
            'camera'        => $request->get('camera'),
            'battery'       => $request->get('battery'),
            'warranty'      => $request->get('warranty'),
            'price'         => $request->get('price'),
        ]);
        ProductImage::create([
            'product_img' => $request->get('product_img'),
            'color_name' => $request->get('color_name'),
            'product_id' => $p->id, //take id from Product
        ]);

        


        return redirect()->route('list.phone');

    }

    public function storeImage($request){
        if($request->file('product_img')){
            $file= $request->file('product_img');
            $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
            $file-> move(public_path('storage/app/public/product_img/'), $filename);
            return $filename;
            // dd($file);
        }
    }

    public function edit(Product $product){
        $productImg = ProductImage::where('product_id', $product->id)->first();
        return view('admin.phones.components.edit_phone',['product' => $product, 'productImg' => $productImg]);
    }

    public function update(Request $request, $id){

        $product = Product::where('id', $id)->first();
        $product->product_code  = $request->product_code;
        $product->product_name  = $request->product_name;
        $product->storage       = $request->storage;
        $product->display       = $request->display;
        $product->ram           = $request->ram;
        $product->processor     = $request->processor;
        $product->camera        = $request->camera;
        $product->battery       = $request->battery;
        $product->warranty      = $request->warranty;
        $product->price         = $request->price;

        if($product->update()){
            $productImg = ProductImage::where('product_id', $id)->first();
            $productImg->color_name = $request->color_name;
            if($request->product_img){
                $productImg->product_img = $request->product_img;
            }
            $productImg->update();
        }

        return redirect()->route('list.phone');
    }

    public function detail(Product $product){

        return view('admin.phones.components.detail_phone',compact('product'));

    }

    public function delete(Product $product){

        //Delete the product
        $product->delete();

        return redirect()->route('list.phone');
    }
}
