<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        $products= Product::all();
        return view('admin.dashboard.dashboard', ['products' => $products]);
    }
}
