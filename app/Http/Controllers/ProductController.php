<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Samsung', 'price' => 10],
            ['name' => 'Iphone', 'price' => 20],
            ['name' => 'Techno', 'price' => 30],
        ];
        
        return view('products', compact('products'));
    }
}