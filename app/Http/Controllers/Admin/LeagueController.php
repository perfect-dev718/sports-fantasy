<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\League;
use App\Models\Sport;
use App\Models\Team;
use Illuminate\Http\Request;

class LeagueController extends AdminController
{
    //
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
        $leagues = League::orderBy('name', 'asc')->get();
        return view('admin.leagues.list', compact('leagues'));
    }

    public function create()
    {
        $teams = Team::orderBy('name', 'asc')->get();
        $sports = Sport::orderBy('name', 'asc')->get();
        return view('admin.leagues.create', compact('teams', 'sports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required|unique:leagues"
        ]);
        $params = $request->all();
        unset($params['id']);
        League::create($params);
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function edit(Request $request)
    {
        $league = League::find($request->get("id"));
        $teams = Team::orderBy('name', 'asc')->get();
        $sports = Sport::orderBy('name', 'asc')->get();
        return view('admin.leagues.create', compact("league", 'teams', 'sports'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id'=>'exists:leagues',
            'name'=>"required|unique:leagues,name,".$request->get('id')
        ]);
        $params = $request->all();
        $id = $params['id'];
        $league = League::find($id);
        unset($params['_token']);
        foreach ($params as $key=>$val)
        {
            $league->$key = $val;
        }
        $league->save();
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function delete(Request $request)
    {
        $league = League::find($request->input('id'));
        $league->delete();
        return redirect()->route('league.index');
    }
}
