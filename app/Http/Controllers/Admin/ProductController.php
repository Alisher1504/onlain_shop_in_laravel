<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index() {

        $products = Product::all();
        return view('admin.product.index', compact('products'));

    }

    public function add_product() {
        $category_id = Category::all();
        return view('admin.product.addproduct', compact('category_id'));
    }

    public function addproduct(Request $request) {



        $product = new Product();

        if($request->hasfile('image')){

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('assets/uploads/product/', $filename);
            $product->image = $filename;

        };

        $product->cate_id = $request->input('cate_id');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status') == TRUE ? '1' : '0';
        $product->trending = $request->input('trening')  == TRUE ? '1' : '0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_keyvord = $request->input('meta_keyvord');
        $product->meta_description = $request->input('meta_description');
        $product->save();

        return redirect('product')->with('status', 'Add product successfully');
    }

}
