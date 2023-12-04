<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GigModel;
use App\Models\GigPackageMediaModel;
use App\Models\GigFeatureModel;
use DB;
use Illuminate\Http\Request;

class AdmGigFeaturesController extends Controller
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
        $gigs = GigModel::orderBy('id', 'DESC')->get();
        $features = GigFeatureModel::orderBy('gig_id', 'ASC')->orderBy('sort','ASC')->paginate(20);
        return view('backend.pages.gigfeatures.index', compact('gigs', 'features'));
    }

    public function create()
    {
        $gigs = GigModel::orderBy('id', 'DESC')->get();
        return view('backend.pages.gigfeatures.create', compact('gigs'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gig_id' => '',
            'title' => 'required',
            'description' => '',
            'sort' => '',
        ]);

        $gigfeature = GigFeatureModel::create([
            'gig_id' => $request->input('gig_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'sort' => $request->input('sort'),
        ]);

        return redirect()->route('admin.gigfeatures.index')
            ->with('success', 'Gig Feature created successfully');
    }

    public function show($id)
    {
        $gigs = GigModel::all();
        $gigfeature = GigFeatureModel::find($id);

        return view('backend.pages.gigfeatures.show', compact('gigs','gigfeature'));
    }

    public function edit($id)
    {
        $gigs = GigModel::all();
        $gigfeature = GigFeatureModel::find($id);

        return view('backend.pages.gigfeatures.edit', compact('gigs','gigfeature'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gig_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'sort' => '',
        ]);

        $gigFeature = GigFeatureModel::find($id);
        $gigFeature->gig_id = $request->input('gig_id');
        $gigFeature->title = $request->input('title');
        $gigFeature->description = $request->input('description');
        $gigFeature->sort = $request->input('sort');
        $gigFeature->save();

        return redirect()->route('admin.gigfeatures.index')
            ->with('success', 'Gig Feature updated successfully');
    }

    public function destroy($id)
    {
        DB::table("gig_features")->where('id', $id)->delete();
        return redirect()->route('admin.gigfeatures.index')
            ->with('success', 'Gig Feature deleted successfully');
    }
}
