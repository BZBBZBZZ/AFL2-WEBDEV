<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::with('category')->take(9)->get();
        
        return view('index', compact('featuredProducts'));
    }

    public function aboutUs()
    {
        return view('aboutus');
    }

    public function contactUs()
    {
        return view('contactus');
    }
}