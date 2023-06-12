<?php

/**
 * Controller ini untuk mengatur landing page
 * dan mengatur halaman utama pada dashboard
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\ViewProduct;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Get active sliders and accepted products
        $sliders = Slider::where('is_active', 1)->latest()->get();
        $products = Product::where('status', 'accepted')->take(9)->get();
        $categories = Category::orderBy('name')->get();

        return view('landing', compact('sliders', 'products', 'categories'));
    }

    public function dashboard()
    {
        $navitem = 'dashboard';
        $navitemchild = '';

        return view('dashboard', compact('navitem', 'navitemchild'));
    }
}
