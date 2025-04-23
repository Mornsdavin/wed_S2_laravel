<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;


class InvoiceController extends Controller
{

    public function list()
    {
        $invoice = Invoice::get();
        
        return response()->json($invoice);
    }
    public function create(Request $request)
    {
        $invoice = new Invoice();

        $invoice-> invoice_date = $request->invoice_date;
        $invoice-> total_amount = $request->total_amount;

        $invoice->save();
        return response()->json('create success');

    }

    public function update(Request $request)
    {
        $invoice = Invoice::findorfail($request->id);

        $invoice-> invoice_date = $request->invoice_date;
        $invoice-> total_amount = $request->total_amount;

        $invoice->update();
        return response()->json('update success');

    }

     public function destroy(Request $request)
    {
        $invoice = Invoice::findorfail($request->id)->delete();

        return response()->json("delete success");

    }
}
