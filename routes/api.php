<?php

use App\Http\Controllers\API\AccountController;
use App\Http\Controllers\API\ApiProductController;
use App\Http\Controllers\API\ProductImageController;
use App\Http\Controllers\API\InvoiceController;
use App\Http\Controllers\API\InvoiceProductController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('testing',function(){
    return "this is a test api";
});
//product API
Route::post('add-product',[ApiProductController::class, 'create']);
Route::put('add-product/update',[ApiProductController::class, 'update']);
Route::delete('add-product/destroy',[ApiProductController::class, 'destroy']);
Route::get('add-product/list',[ApiProductController::class, 'list']);

//productImage API
Route::post('productImg',[ProductImageController::class, 'create']);
Route::put('productImg/update',[ProductImageController::class, 'update']);
Route::delete('productImg/destroy',[ProductImageController::class, 'destroy']);
Route::get('productImg/list',[ProductImageController::class, 'list']);

//invoice API
Route::post('invoice',[InvoiceController::class, 'create']);
Route::put('invoice/update',[InvoiceController::class, 'update']);
Route::delete('invoice/destroy',[InvoiceController::class, 'destroy']);
Route::get('invoice/list',[InvoiceController::class, 'list']);

//invoice Product API
Route::post('invoiceProduct',[InvoiceProductController::class, 'create']);
Route::put('invoiceProduct/update',[InvoiceProductController::class, 'update']);
Route::delete('invoiceProduct/destroy',[InvoiceProductController::class, 'destroy']);
Route::get('invoiceProduct/list',[InvoiceProductController::class, 'list']);

//account API
Route::post('account',[AccountController::class, 'create']);
Route::put('account/update',[AccountController::class, 'update']);
Route::delete('account/destroy',[AccountController::class, 'destroy']);
Route::get('account/list',[AccountController::class, 'list']);

//user api
Route::post('user',[UserController::class, 'create']);
Route::put('user/update',[userController::class, 'update']);
Route::delete('user/destroy',[userController::class, 'destroy']);
Route::get('user/list',[userController::class, 'list']);