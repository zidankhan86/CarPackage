<?php

namespace App\Http\Controllers;

use App\Models\Driver;
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
}
