<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SiteSetting;

class SingleController extends Controller
{
    public function render_products()
{
    $products = Product::latest()->get();
    return view('frontend.product', compact('products'));
}

public function render_contact()
    {
        $page_title = 'Contact Us';
        $googleMapsLink = SiteSetting::first()->google_maps_link;
        return view('frontend.contact', compact('page_title', 'googleMapsLink'));
    }

}
