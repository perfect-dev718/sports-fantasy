<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct(Request $request) {
        $this->middleware(['auth', 'Admin']);
    }

    public function index(Request $request) {
        return redirect()->route('user.admin');
    }
}
