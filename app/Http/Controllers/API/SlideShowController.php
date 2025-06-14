<?php
namespace App\Http\Controllers;

use App\Models\Slideshow;
use Illuminate\Http\Request;

class SlideshowController extends Controller
{
    public function index()
{
    $slideshows = Slideshow::all(); // Fetch all slideshow data// Fetch employee data if needed
    return view('admin.employee.employeelist', [
        'slideshows' => $slideshows,
    ]); // Pass both variables to the view
}
}