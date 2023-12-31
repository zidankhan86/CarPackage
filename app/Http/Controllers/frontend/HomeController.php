<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Category::all();

        return view('frontend.pages.home',compact('products'));
    }

    public function product()
    {

        $products = Category::all();

        return view('frontend.pages.package',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function productDetails($id)
    {
        $details = Product::find($id);
        $categories = Category::all();
        return view('frontend.pages.details',compact('details','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
