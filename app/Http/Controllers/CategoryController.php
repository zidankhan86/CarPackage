<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use BackedEnum;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('frontend.pages.category');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function CatWise($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id',$id)
                  ->limit(2)
                  ->get();
        return view('frontend.pages.category',compact('category','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function delete( $id)
    {
      $delete = Category::find($id);
      $delete->delete();
      return back()->with('success','deleted');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
    public function list()
    {
        $list = Category::all();
       return view('backend.pages.categoryList',compact('list'));
    }

    public function form()
    {
       return view('backend.pages.categoryForm');
    }
}
