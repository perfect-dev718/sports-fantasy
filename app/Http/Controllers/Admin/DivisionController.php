<?php

namespace App\Http\Controllers\Admin;

use App\Models\Division;
use App\Models\League;
use App\Models\Sport;
use Illuminate\Http\Request;

class DivisionController extends AdminController
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
        $divisions = Division::orderBy('name', 'asc')->get();
        return view('admin.divisions.list', compact('divisions'));
    }

    public function create()
    {
        $sports = Sport::all();
        return view('admin.divisions.create', compact('sports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required|unique:divisions"
        ]);
        $params = $request->all();
        unset($params['id']);
        Division::create($params);
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function edit(Request $request)
    {
        $sports = Sport::all();
        $division = Division::find($request->get("id"));
        return view('admin.divisions.create', compact("division", 'sports'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id'=>'exists:divisions',
            'name'=>"required|unique:divisions,name,".$request->get('id')
        ]);
        $params = $request->all();
        $id = $params['id'];
        $division = Division::find($id);
        unset($params['_token']);
        foreach ($params as $key=>$val)
        {
            $division->$key = $val;
        }
        $division->save();
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function delete(Request $request)
    {
        $division = Division::find($request->input('id'));
        $division->delete();
        return redirect()->route('division.index');
    }
}
