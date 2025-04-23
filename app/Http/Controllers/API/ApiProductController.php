<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{

    //fucntion create a new product
    public function create(Request $request)
    {
         //model created using 
        $product = new Product();  
        // model                                  //db
        $product ->product_code = $request -> product_code;
        $product ->battery      = $request -> battery;
        $product ->storage      = $request -> storage;
        $product ->display      = $request -> display;
        $product ->ram          = $request -> ram;
        $product ->processor    = $request -> processor;
        $product ->camera       = $request -> camera;
        $product ->warranty     = $request -> warranty;
        $product ->price        = $request -> price;
     
        $product->save();
        // dd($product);
        return response()->json("success"); // for indicates to client that the product was successfully
    }

    public function update(Request $request)
    {

        // return "hi";
        $product = Product::find($request->id);

        $product ->product_code = $request -> product_code;
        $product ->battery      = $request -> battery;
        $product ->storage      = $request -> storage;
        $product ->display      = $request -> display;
        $product ->ram          = $request -> ram;
        $product ->processor    = $request -> processor;
        $product ->camera       = $request -> camera;
        $product ->warranty     = $request -> warranty;
        $product ->price        = $request -> price;

        $product ->update();
        // dd($product);
        return response()->json("updated success");
    }

    public function destroy(Request $request)
    {
        $product = Product::findorfail($request->id)->delete();

        return response()->json("delete success");

    }

    public function list()
    {
        $product = Product::get();
        
        return response()->json($product);
    }

}
