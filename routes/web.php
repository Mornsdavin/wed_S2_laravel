<?php

use App\Http\Controllers\Authenticate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProductController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlideShowController;
use App\Models\Slideshow;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin/dashboard/dashboard.',[DashboardController::class,'dashboard'])->name('dashboard');
    //admin routes Product
    Route::get('/admin/phone',[PhoneController::class,'list'])->name('list.phone');
    Route::get('/admin/phone/create',[PhoneController::class,'create'])->name(name: 'create.phone');
    Route::post('/admin/phone/store',[PhoneController::class,'store'])->name('store.phone');
    Route::get('/admin/edit/{product}',[PhoneController::class,'edit'])->name('edit.phone');
    Route::put('/admin/update/{id}',[PhoneController::class,'update'])->name('update.phone');
    Route::get('/admin/{product}/detail',[PhoneController::class,'detail'])->name('detail.phone');
    Route::delete('/admin/{product}/delete',[PhoneController::class,'delete'])->name('delete.phone');
    Route::get('/admin/edit_employee/{employee}',[Authenticate::class,'edit'])->name('edit.employee');
    Route::put('/admin/update_employee/{id}',[Authenticate::class,'update'])->name('update.employee');
    Route::delete('/admin/delete/{employee}/',[Authenticate::class,'delete'])->name('delete.employee');

});


Route::get('/home',[HomeController::class,'listProducts'])->name('home.list');
Route::get('/login',[Authenticate::class,'login'])->name('login');
Route::post('/login',[Authenticate::class,'loginA'])->name('loginA');
Route::get('/register',[Authenticate::class,'register'])->name('register');
Route::post('/admin/user/store',[Authenticate::class,'store'])->name('user.store');
Route::get('/menu',[HomeController::class,'menu'])->name('menu');
Route::get('/footer',[HomeController::class,'footer'])->name('footer');
Route::get('/testhome',[HomeController::class,'test'])->name('test');
Route::get('/product',[HomeController::class,'product'])->name('product');
Route::get('/phone/productlist', [HomeController::class, 'productList'])->name('home.product.list');
Route::get('/home/productDetail/{id}', [PhoneController::class, 'showDetail'])->name('home.productDetail');
Route::post('/logout', [Authenticate::class, 'logout'])->name('logout');
Route::post('/home/order/store/{id}', [OrderController::class, 'store'])->name('order.store');
Route::get('/home/order/{id}', [PhoneController::class, 'OrderStore'])->name('home.store');
Route::get('/admin/employee/employeelist', [Authenticate::class, 'list'])->name('employee.list');
Route::get('/admin/slideshows', [SlideshowController::class, 'index'])->name('slideshows.list');


Route::get('/hi',function(){
    return 'hi';
});
Route::get('/admin/phones', function () {
    return view('admin.phones.phone');
});

Route::get('/admin/phones/components', function () {
    return view('admin.phones.components.add_phone');
});

// Route::get('/admin/employee', function () {
//     return view('admin.employee.index');
// });

Route::get('/admin/employee/components', function () {
    return view('admin.employee.components.add_employee');
});

Route::get('/admin/about/components', function(){
    return view('about.about.components.add_employee');
});

Route::get('/about', function(){
    return view('Frontend.about.index');
});

Route::get('/contact', function(){
    return view('Frontend.contact.contact');
});

Route::get('/admin/about', function(){
    return view('about.about');
});

// Route::get('/admin/setting', function(){
//     return view('setting.setting');
// });


// Route::get('/admin/dashboard', function(){
//     return view('admin.dashboard.dashboard');
// });

