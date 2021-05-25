<?php


namespace App\Http\Controllers\Admin;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends AdminController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }
    //
    public function index(Request $request)
    {
        $sports = Sport::orderBy('name', 'asc')->get();
        return view('admin.sports.list', ['sports' => $sports]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request)
    {
        $article = Sport::find($request->get('id'));
        $article->delete();
        return redirect()->back();
    }

    public function create()
    {
        return view('admin.sports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required|unique:sports"
        ]);
        $params = $request->all();
        unset($params['id']);
        Sport::create($params);
        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function edit(Request $request)
    {
        $sport = Sport::find($request->get("id"));
        return view('admin.sports.create', compact("sport"));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id'=>'exists:sports',
            'name'=>"required|unique:sports,name,".$request->get('id')
        ]);
        $params = $request->all();
        $id = $params['id'];
        $sport = Sport::find($id);
        unset($params['_token']);
        foreach ($params as $key=>$val)
        {
            $sport->$key = $val;
        }
        $sport->save();
        return redirect()->back()->with('success', 'Saved successfully');
    }
}
