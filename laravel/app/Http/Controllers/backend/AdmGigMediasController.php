<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GigModel;
use App\Models\GigMediaModel;
use DB;
use Illuminate\Http\Request;

class AdmGigMediasController extends Controller
{
    function __construct()
    {
        //$this->middleware(['permission:gig-list|gig-create|gig-edit|gig-delete'], ['only' => ['index', 'store']]);
        //$this->middleware(['permission:gig-create'], ['only' => ['create', 'store']]);
        //$this->middleware(['permission:gig-edit'], ['only' => ['edit', 'update']]);
        //$this->middleware(['permission:gig-delete'], ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $gigs = GigModel::all();
        $gigmedias = GigMediaModel::orderBy('id', 'DESC')->paginate(10);
        return view('backend.pages.gigmedias.index', compact('gigs','gigmedias'));
    }

    public function create()
    {
        return view('backend.pages.gigmedias.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:gigmedias,title'
        ]);

        $gig = GigModel::create(['title' => $request->input('title'),'description' => $request->input('description')]);

        return redirect()->route('admin.gigmedias.index')
            ->with('success', 'Gig created successfully');
    }

    public function show($id)
    {
        $gig = GigModel::find($id);

        return view('backend.pages.gigmedias.show', compact('gig'));
    }

    public function edit($id)
    {
        $gig = GigModel::find($id);

        return view('backend.pages.gigmedias.edit', compact('gig'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $gig = GigModel::find($id);
        $gig->title = $request->input('title');
        $gig->description = $request->input('description');
        $gig->save();

        return redirect()->route('admin.gigmedias.index')
            ->with('success', 'Gig updated successfully');
    }

    public function destroy($id)
    {
        DB::table("gigmedias")->where('id', $id)->delete();
        return redirect()->route('admin.gigmedias.index')
            ->with('success', 'Gig deleted successfully');
    }
}
