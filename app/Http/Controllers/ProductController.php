<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function list()
     {
        $products =Product::with('category')->get();
        return view('backend.pages.productList',compact('products'));
     }
    public function form()
    {
        $packageName = Category::all();
       return view('backend.pages.productForm',compact('packageName'));
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required',
            'category_id'=>'required',
            "stock"=>'required',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $imageName, 'public');
        }


        $product = new Product;
        $product->name          = $request->input('name');
        $product->price         = $request->input('price');
        $product->image         = $imageName;
        $product->description   = $request->input('description');
        $product->offer         = $request->input('offer');
        $product->category_id   = $request->input('category_id');
        $product->stock         = $request->input('stock');
        $product->save();

        return redirect()->route('product.list')->with('success', 'Product created successfully');

    }


    public function edit($id)
    {
        $product    = Product::find($id);
        $categories = Category::all();
       return view('backend.pages.productEdit',compact('product','categories'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required',
            'category_id'=>'required'
        ]);

        $imageName = $request->image;
        if ($request->hasFile('image')) {
            $imageName = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $imageName, 'public');
        }

        
        $product =Product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->image = $imageName;
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');

        $product->save();

        return redirect()->route('product.list')->with('success', 'Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $delete = Product::find($id);
        $delete->delete();
        return back()->with('success','deleted');
    }
}
