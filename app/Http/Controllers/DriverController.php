<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function addDriver(){
        return view('backend.driver.driverForm');
    }

    public function DriverStore(Request $request){

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $imageName, 'public');
        }

        //dd($request->all());
        Driver::create([

            "name"=>$request->name,
            "about_driver"=>$request->about_driver,
            "image"=>$imageName,
        ]);
       toastr()->success('Success! Driver Added ');
        return back();

    }

    public function DriverStoreUpdate(Request $request, $id)
    {
        $update = Book::find($id);
    
        if (!$update) {
            toastr()->error('Record not found');
            return back();
        }
    
        $update->update([
            'driver_name' => "John Doe",
            'status' => "Assigned",
        ]);
    
        toastr()->success('Status updated');
        return back();
    }
    
}
