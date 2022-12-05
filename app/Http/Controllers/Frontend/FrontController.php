<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{


    public function index() {
        $product_trend = Product::where('trending', '1')->take(15)->get();
        return view('frontend.index', compact('product_trend'));
    }

    public function tovar_category() {
        $status_product = Category::where('status', '1')->take(15)->get();
        return view('frontend.tovar-category', compact('status_product'));
    }

    public function popular_category() {
        $popular_category = Category::where('popular', '1')->take(15)->get();
        return view('frontend.popular-category', compact('popular_category'));
    }

    public function view_category($slug) {

        if(Category::where('slug', $slug)->exists()) {

            $category = Category::where('slug', $slug)->first();
            $product = Product::where('cate_id', $category->id)->where('status', '0')->get();
            return view('frontend.product.index', compact('category', 'product'));

        }
        else{
            return redirect('/')->with('status', 'category does not');  
        }

    }

}
