<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use BackedEnum;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //For FrontEnd 
    public function index()
    {
       return view('frontend.pages.category');
    }

    public function CatWise($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id',$id)
                  ->limit(2)
                  ->get();
        return view('frontend.pages.category',compact('category','products'));
    }

    //For Backend 

    public function list()
    {
        $list = Category::all();
        return view('backend.pages.categoryList',compact('list'));
    }
    public function form()
    {
       return view('backend.pages.categoryForm');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',

        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $imageName, 'public');
        }

        Category::create([

            "name"=>$request->name,
            "image" => $imageName,

        ]);
        return back()->with('success','Package added');
    }

    public function edit($id)
    {
        $category =Category::find($id);
        return view('backend.pages.categoryEdit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',

        ]);

        $imageName = $request->image;
        if ($request->hasFile('image')) {
            $imageName = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $imageName, 'public');
        }
    $category=Category::find($id);
    $category->update([

            "name"=>$request->name,
            "image" => $imageName,

        ]);
        return back()->with('success','Package Updated.');
    }
    public function delete( $id)
    {
      $delete = Category::find($id);
      $delete->delete();
      return back()->with('success','deleted');
    }
}
