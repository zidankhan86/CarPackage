<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('backend.pages.profile');
    }

    public function userProfile(){
        $user = User::all();
        return view('frontend.pages.profile',compact('user'));
    }


}
