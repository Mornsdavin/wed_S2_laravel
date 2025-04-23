<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\InvoiceProduct;
use App\Models\Product;
use Illuminate\Http\Request;


class InvoiceProductController extends Controller
{
    
    public function list()
    {
        $invoiceProduct = InvoiceProduct::get();
        
        return response()->json($invoiceProduct);
    }
    public function create(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->invoices()->sync([
            $request->invoice_id => [
                'qty' => $request->qty,
                'price' => $request->price,
                'total_price' => $request->total_price,
                'description' => $request->description,
            ]
        ]);
        return response()->json('create success');

    }

    public function update(Request $request)
    {
        $invoiceProduct = new InvoiceProduct($request->id);

        $invoiceProduct-> purchase      = $request->purchase;
        $invoiceProduct-> product_id    = $request->product_id;
        $invoiceProduct-> invoice_id    = $request->invoice_id;
        $invoiceProduct-> qty           = $request->qty;
        $invoiceProduct-> description   = $request->description;
        $invoiceProduct-> price         = $request->price;
        $invoiceProduct-> total_price   = $request->total_price;

        $invoiceProduct->update();
        return response()->json('update success');

    }

     public function destroy(Request $request)
    {
        $invoiceProduct = InvoiceProduct::findorfail($request->id)->delete();

        return response()->json("delete success");

    }
}
