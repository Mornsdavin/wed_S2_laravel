<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use App\Http\Requests\StoreProductImageRequest;
use App\Http\Requests\UpdateProductImageRequest;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $productImage = new ProductImage();

        $productImage ->product_id = $request -> product_id;
        $productImage ->color_name = $request -> color_name;
        $productImage ->product_img= $request -> product_img;

        $productImage->save();
        // dd($productImage);
        return response()->json('created success');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductImage $productImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $productImage = ProductImage::findorfail($request->id);

        $productImage ->product_id = $productImage->product_id;
        $productImage ->color_name = $productImage->color_name;
        $productImage ->product_img= $productImage->product_img;

        $productImage->update();

        return response()->json("updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $productImage = ProductImage::findorfail($request->id)->delete();

        return response()->json("deleted successfully");
    }

    public function list()
    {
        $productImage = ProductImage::get();

        return response()->json($productImage);

    }
}
