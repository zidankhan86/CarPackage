<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $product = Product::find($id);
        return view('frontend.pages.bookForm',compact('product'));
    }

    public function bookingStore(Request $request){


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'from_date' => 'required|date|after_or_equal:'.today()->format('Y-m-d'),
            'to_date' => 'required|date|after:from_date',
            'road' => 'required',
            'city' => 'required',
            'location' => 'required',
            "hour" => 'required',
        ]);


        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }

        //dd($request->all());

            Book::create([
            "user_id"=>$request->user_id,
            "name" =>$request->name,
            "phone" =>$request->phone,
            "from_date" =>$request->from_date,
            "to_date" =>$request->to_date,
            "road" =>$request->road,
            "city" =>$request->city,
            "location" =>$request->location,
            "status" =>'progress',
            "product_id"=>$request->product_id,
            "hour" =>$request->hour,
            "total"=>$request->total,


        ]);

        return redirect()->route('home')->with('success','We will contact soon!');

    }

    public function bookList(){

        $userBooking = Book::all();

        return view('backend.pages.order.orderlist',compact('userBooking'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
