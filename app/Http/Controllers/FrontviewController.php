<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontviewController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 'active')->get();

        return view('frontend.index', compact('products'));
    }
}
