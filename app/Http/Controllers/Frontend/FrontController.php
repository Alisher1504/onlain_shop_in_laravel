<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{


    public function index() {
        $product_trend = Product::where('trending', '1')->take(15)->get();
        return view('frontend.index', compact('product_trend'));
    }

}
