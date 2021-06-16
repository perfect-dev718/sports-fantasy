<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PlayerController extends AdminController
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
        return view('admin.players.list');
    }

    public function getAjaxData(Request $request) {
        return DataTables::of(Player::query())->make(true);
    }

    public function delete(Request $request) {
        Player::find($request->get('id'))->delete();
        return redirect()->back()->with('success', 'Successfully deleted');
    }
}
