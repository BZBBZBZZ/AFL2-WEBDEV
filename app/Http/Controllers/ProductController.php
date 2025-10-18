<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        
        return view('products', compact('products'));
    }
    public function show(Product $product)
    {
        $product->load('category');
        
        return view('productdetails', compact('product'));
    }
}
