<?php

namespace App\Http\Controllers\Admin;

use App\Models\League;
use App\Models\Matchup;
use Illuminate\Http\Request;

class MatchupController extends AdminController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    //
    public function index(Request $request)
    {
        $matchups = Matchup::all();
        return view('admin.matchups.list', compact('matchups'));
    }

    public function create()
    {
        $leagues = League::orderBy('name', 'asc')->get();
        return view('admin.matchups.create', compact('leagues'));
    }

    public function store(Request $request)
    {
        $params = $request->all();
        unset($params['id']);
        Matchup::create($params);
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function edit(Request $request)
    {
        $leagues = League::orderBy('name', 'asc')->get();
        $matchup = Matchup::find($request->get("id"));
        return view('admin.matchups.create', compact("matchup", 'leagues'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id'=>'exists:matchups',
        ]);
        $params = $request->all();
        $id = $params['id'];
        $matchup = Matchup::find($id);
        unset($params['_token']);
        foreach ($params as $key=>$val)
        {
            $matchup->$key = $val;
        }
        $matchup->save();
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function delete(Request $request)
    {
        $matchup = Matchup::find($request->input('id'));
        $matchup->delete();
        return redirect()->route('matchup.index');
    }
}
