<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $productId)
    {
        $order = new Order;
        $order->email = $request->get('email');
        $order->phone = $request->get('phone');
        $order->name = $request->get('name');
        $order->address = $request->get('address');
        $order->product_id = $productId;
        $order->save();

        if ($order) {
            $botToken = "6436238382:AAH_5NzhUHECqlVXB1asNIn0GGx16AhwEK0";
            $chat_id = "-1002117527137";
            $message = "Information Customer Order:\nCustomer Name: ".$order->name."\nCustomer Phone: ".$order->phone."\nCustomer Address: ".$order->address."\nProduct Code: ".$order->product_id;
            $bot_url = "https://api.telegram.org/bot$botToken/";
            $url = $bot_url . "sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($message);
            file_get_contents($url);
        } else {
            echo "
                <script>
                    alert('Something Went Wrong!');
                </script>
            ";
        }

        return redirect()->route('home.productDetail',['id' => $productId])->with('success', 'You order successfully!, <br> Please wait');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
