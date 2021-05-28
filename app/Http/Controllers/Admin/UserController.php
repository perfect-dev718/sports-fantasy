<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;

class UserController extends AdminController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    //
    public function index(Request $request)
    {
        $users = User::where("role", '<>', 'admin' )->get();
        return view('admin.users.list', compact('users'));
//        return view('admin.articles.list');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'=>"email"
        ]);
        $params = $request->all();
        unset($params['id']);
        User::create($params);
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function edit(Request $request)
    {
        $user = User::find($request->get("id"));
        return view('admin.users.create', compact("user"));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id'=>'exists:users',
            'email'=>"email"
        ]);
        $params = $request->all();
        $id = $params['id'];
        $user = User::find($id);
        foreach ($params as $key=>$val)
        {
            $user->$key = $val;
        }
        $user->save();
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->input('id'));
        $user->delete();
        return redirect()->route('user.index');
    }
}
