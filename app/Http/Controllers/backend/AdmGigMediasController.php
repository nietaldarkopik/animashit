<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GigModel;
use App\Models\GigMediaModel;
use DB;
use Illuminate\Http\Request;

class AdmGigMediasController extends Controller
{
    public $filter = [];

    function __construct()
    {
        //$this->middleware(['permission:gig-list|gig-create|gig-edit|gig-delete'], ['only' => ['index', 'store']]);
        //$this->middleware(['permission:gig-create'], ['only' => ['create', 'store']]);
        //$this->middleware(['permission:gig-edit'], ['only' => ['edit', 'update']]);
        //$this->middleware(['permission:gig-delete'], ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $input_gig_id = $request->input('gig_id');
        $do_action = $request->input('do_filter');
        
        if(!empty($input_gig_id) and !empty($do_action))
        {
            $filter = ['gig_id' => $input_gig_id];
            $request->session()->put('gigmedias_filter', $filter);
        }
        
        $filter = $request->session()->get('gigmedias_filter');
        $gig_id = (isset($filter['gig_id']))?$filter['gig_id']:'';

        $gigs = GigModel::all();
        $gigmedias = GigMediaModel::orderBy('id', 'DESC');

        if(!empty($gig_id))
        {
            $gigmedias->where('gig_id',$gig_id);
        }
        $gigmedias = $gigmedias->paginate(100);
        return view('backend.pages.gigmedias.index', compact('gigs','gigmedias','filter'));
    }

    public function create()
    {
        return view('backend.pages.gigmedias.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gig_id' => 'required',
        ]);

        $data = [
            'gig_id' => $request->input('gig_id'),
            'title' => $request->input('title'),
            'type' => $request->input('type'),
            'display' => $request->input('display'),
            'media' => $request->input('media'),
            'description' => $request->input('description')
        ];

        $gig_id = $data['gig_id'];
        $gigmedia = GigMediaModel::create($data);

        $new_medias = new GigMediaModel;
        $new_medias->uploadMedia($gigmedia,$request->file('media_file'));

        return redirect()->route('admin.gigmedias.index')
            ->with('success', 'Gig Media created successfully');
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

    public function byGig(Request $request)
    {
        $id = (empty($id))?$request->input("gig_id"):$id;
        $filter = ['gig_id' => $id];
        $request->session()->put('gigmedias_filter',$filter);
        $gig_id = (isset($filter['gig_id']))?$filter['gig_id']:'';

        $gig = GigModel::find($id);
        $gigs = GigModel::all();
        $gigmedias = GigMediaModel::orderBy('id','DESC');
        if(!empty($gig_id))
        {
            $gigmedias->where('gig_id',$gig_id);
        }
        $gigmedias = $gigmedias->paginate(10);

        return view('backend.pages.gigmedias.index', compact('gigs','gig','gigmedias','filter'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gig_id' => 'required',
        ]);

        $gig = GigModel::find($id);
        $gig->title = $request->input('title');
        $gig->description = $request->input('description');
        $gig->save();

        return redirect()->route('admin.gigmedias.index')
            ->with('success', 'Gig Media updated successfully');
    }

    public function destroy($id)
    {
        DB::table("gig_medias")->where('id', $id)->delete();
        return redirect()->route('admin.gigmedias.index')
            ->with('success', 'Gig Media deleted successfully');
    }
}
