<?php

namespace App\Http\Controllers\Admin;

use App\Models\Division;
use App\Models\Team;
use App\Models\League;
use Illuminate\Http\Request;

class TeamController extends AdminController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    //
    public function index(Request $request)
    {
        $teams = Team::orderBy('name', 'asc')->get();
        return view('admin.teams.list', compact('teams'));
    }

    public function create()
    {
        $leagues = League::orderBy('name', 'asc')->get();
        $divisions = Division::orderBy('name', 'asc')->get();
        return view('admin.teams.create', compact('leagues', 'divisions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required|unique:teams"
        ]);
        $params = $request->all();
        unset($params['id']);
        Team::create($params);
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function edit(Request $request)
    {
        $leagues = League::orderBy('name', 'asc')->get();
        $divisions = Division::orderBy('name', 'asc')->get();
        $team = Team::find($request->get("id"));
        return view('admin.teams.create', compact("team", 'leagues', 'divisions'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id'=>'exists:teams',
            'name'=>"required|unique:teams,name,".$request->get('id')
        ]);
        $params = $request->all();
        $id = $params['id'];
        $team = Team::find($id);
        unset($params['_token']);
        foreach ($params as $key=>$val)
        {
            $team->$key = $val;
        }
        $team->save();
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function delete(Request $request)
    {
        $team = Team::find($request->input('id'));
        $team->delete();
        return redirect()->route('team.index');
    }
}
