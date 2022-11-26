<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index() {
        $data = Category::all();
        return view('admin.category.index', compact('data'));
    }

    public function add() {
        return view('admin.category.addcategory');
    }

    public function store(Request $request) {

        $category = new Category();

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('assets/uploads/category/', $filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_descrip = $request->input('meta_descrip');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->save();

        return redirect('category')->with('status', 'category add successfully');
            
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('admin.category.edit-category', compact('category'));
    }

    public function update(Request $request, $id) {

        $category = Category::findOrFail($id);
        if($request->hasFile('image')){

            $path = 'assets/uploads/category/' . $category->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.' .$ext;
            $file->move('assets/uploads/category/', $filename);
            $category->image = $filename;

        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_descrip = $request->input('meta_descrip');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->update();

        return redirect('category')->with('status', 'update category successfully');

    } 

}
