<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index(){
        return view('land.index');
    }

    public function forgot(Request $request) {
        return view('auth.forgot_password');
    }

    public function reset_password(Request $request) {
        return view('auth.reset_password');
    }
}
