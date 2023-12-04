<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GigFeatureModel;
use App\Models\GigModel;
use App\Models\GigPackageExtraModel;
use App\Models\GigPackageFeatureModel;
use App\Models\GigPackageMediaModel;
use App\Models\GigPackageHeadModel;
use App\Models\GigPackageModel;
use App\Models\PackageModel;
use App\Models\ProfileModel;
use DB;
use Illuminate\Http\Request;

class AdmGigPackagesController extends Controller
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
        $artists = ProfileModel::where('user_type','=', 4);
        $gigpackages = GigPackageHeadModel::orderBy('gig_id', 'ASC')->paginate(5);

        return view('backend.pages.gigpackages.index', compact('gigs','gigpackages','artists'));
    }

    public function create()
    {
        $gigs = GigModel::all();
        $packages = PackageModel::orderBy('sort','asc')->get();
        $artists = ProfileModel::where('user_type','=', 4)->get();
        return view('backend.pages.gigpackages.create',compact('gigs','artists','packages'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'head' => 'required|array',
            'package' => 'required|array',
            'feature' => 'required|array',
            'extra' => 'array',
        ]);
        
        //dd($request->all());

        $gighead = GigPackageHeadModel::create($request->head);
        $gigheadid = $gighead->id;
        $postpackage = $request->package;
        $postfeature = $request->feature;
        $postextra = $request->extra;

        foreach($postpackage as $i => $pack)
        {
            $datapackage = [
                            'gig_id' => $request->head['gig_id'], 
                            'package_id' => $i, 
                            'gig_package_head_id' => $gigheadid, 
                            'sort' => $i, 
                            'title' => $pack['title'], 
                            'price' => $pack['price'], 
                            'description' => $pack['description']
                        ];
            $gigpackage = GigPackageModel::create($datapackage);
            
            foreach($postfeature as $o => $feats)
            {
                foreach($feats as $a => $feat)
                {
                    $datapackagefeature = [
                        'gig_id' => $request->head['gig_id'],
                        'gig_package_head_id' => $gigheadid,
                        'gig_package_id' => $gigpackage->id,
                        'gig_feature_id' => $a,
                        'value' => $feat,
                    ];
                    $gigpackagefeature = GigPackageFeatureModel::create($datapackagefeature);
                }
            }
        }
        
        if(is_array($postextra) and count($postextra) > 0)
        {
            foreach($postextra as $o => $feat)
            {
                $datapackagefeature = [
                    'gig_id' => $request->head['gig_id'],
                    'gig_package_head_id' => $gigheadid,
                    'gig_feature_id' => $o,
                    'value' => $feat,
                ];
                $gigpackagefeature = GigPackageExtraModel::create($datapackagefeature);
            }
        }

        return redirect()->route('admin.gigpackages.index')
            ->with('success', 'Gig created successfully');
    }

    public function show($id)
    {
        $gigs = GigModel::all();
        $packages = PackageModel::orderBy('sort','asc')->get();
        $artists = ProfileModel::where('user_type','=', 4)->get();
        $gigpackage = GigPackageHeadModel::find($id);
        $featureList = GigFeatureModel::where(function($query) use ($gigpackage) {
            $query->where('gig_id','=',$gigpackage->gig_id);
            $query->where('type','=', 'default');
        })->get();
        $extraFeatureList = GigFeatureModel::where(function($query) use ($gigpackage) {
            $query->where('gig_id','=',$gigpackage->gig_id);
            $query->where('type','=', 'extra');
        })->get();
        $featureValues = GigPackageFeatureModel::where(function($query) use ($gigpackage,$id) {
            $query->where('gig_id','=',$gigpackage->gig_id);
            $query->where('gig_package_head_id','=',$id);
        })->get();
        $extraValues = GigPackageExtraModel::where(function($query) use ($gigpackage,$id) {
            $query->where('gig_id','=',$gigpackage->gig_id);
            $query->where('gig_package_head_id','=',$id);
        })->get();

        $extraFeatureValues = [];
        $packageFeatureValues = [];
        foreach ($featureValues as $val) {
            $packageFeatureValues[$val->package->package_id][$val->gig_feature_id] = $val->value;
        }
        foreach ($extraValues as $val) {
            $extraFeatureValues[$val->gig_feature_id] = $val->value;
        }

        return view('backend.pages.gigpackages.show',compact('gigs','artists','packages','gigpackage','featureList','extraFeatureList','packageFeatureValues','extraFeatureValues'));
    }

    public function edit($id)
    {
        $gigs = GigModel::all();
        $packages = PackageModel::orderBy('sort','asc')->get();
        $artists = ProfileModel::where('user_type','=', 4)->get();
        $gigpackage = GigPackageHeadModel::find($id);
        $featureList = GigFeatureModel::where(function($query) use ($gigpackage) {
            $query->where('gig_id','=',$gigpackage->gig_id);
            $query->where('type','=', 'default');
        })->get();
        $extraFeatureList = GigFeatureModel::where(function($query) use ($gigpackage) {
            $query->where('gig_id','=',$gigpackage->gig_id);
            $query->where('type','=', 'extra');
        })->get();
        $featureValues = GigPackageFeatureModel::where(function($query) use ($gigpackage,$id) {
            $query->where('gig_id','=',$gigpackage->gig_id);
            $query->where('gig_package_head_id','=',$id);
        })->get();
        $extraValues = GigPackageExtraModel::where(function($query) use ($gigpackage,$id) {
            $query->where('gig_id','=',$gigpackage->gig_id);
            $query->where('gig_package_head_id','=',$id);
        })->get();

        $extraFeatureValues = [];
        $packageFeatureValues = [];
        foreach ($featureValues as $val) {
            $packageFeatureValues[$val->package->package_id][$val->gig_feature_id] = $val->value;
        }
        foreach ($extraValues as $val) {
            $extraFeatureValues[$val->gig_feature_id] = $val->value;
        }

        return view('backend.pages.gigpackages.edit',compact('gigs','artists','packages','gigpackage','featureList','extraFeatureList','packageFeatureValues','extraFeatureValues'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'head' => 'required|array',
            'head.gig_id' => 'required|integer',
            'head.profile_id' => 'required|integer',
            'package' => 'required|array',
            'feature' => 'required|array',
            'extra' => 'array',
        ]);
        
        $gigheadid = $id;
        $posthead = $request->head;
        $postpackage = $request->package;
        $postfeature = $request->feature;
        $postextra = $request->extra;
        
        $gighead = GigPackageHeadModel::find($id);
        $gighead->gig_id = $posthead['gig_id'];
        $gighead->profile_id = $posthead['profile_id'];
        $gighead->save();

        $changedpackage = [];
        $changedfeature = [];
        $changedextra = [];

        foreach($postpackage as $i => $pack)
        {
            $datapackage = [
                            'gig_id' => $request->head['gig_id'], 
                            'package_id' => $i, 
                            'gig_package_head_id' => $gigheadid, 
                            'sort' => $i, 
                            'title' => $pack['title'], 
                            'price' => $pack['price'], 
                            'description' => $pack['description']
                        ];
            $gigpackage = GigPackageModel::where(function($query) use ($datapackage){
                $query->where('gig_id', $datapackage['gig_id']);
                $query->where('package_id', $datapackage['package_id']);
                $query->where('gig_package_head_id', $datapackage['gig_package_head_id']);
            })->first();
            
            $gigpackage->sort = $i;
            $gigpackage->title = $pack['title'];
            $gigpackage->price = $pack['price']; 
            $gigpackage->description = $pack['description'];
            $gigpackage->save();
            
            foreach($postfeature as $o => $feats)
            {
                foreach($feats as $a => $feat)
                {
                    $datapackagefeature = [
                        'gig_id' => $request->head['gig_id'],
                        'gig_package_head_id' => $gigheadid,
                        'gig_package_id' => $o,
                        'gig_feature_id' => $a,
                        'value' => $feat,
                    ];
                    $gigpackagefeature = GigPackageFeatureModel::firstOrCreate([
                        'gig_id' => $datapackagefeature['gig_id'],
                        'gig_package_head_id' => $datapackagefeature['gig_package_head_id'],
                        'gig_feature_id' => $datapackagefeature['gig_feature_id'],
                        'gig_package_id' => $datapackagefeature['gig_package_id']
                    ]);

                    $gigpackagefeature->gig_id = $request->head['gig_id'];
                    $gigpackagefeature->gig_package_head_id = $gigheadid;
                    $gigpackagefeature->gig_package_id = $o;
                    $gigpackagefeature->gig_feature_id = $a;
                    $gigpackagefeature->value = $feat;
                    $gigpackagefeature->save();
                    
                    if(!isset($changedfeature[$o]))
                    {
                        $changedfeature[$o] = [];
                    }
                    $changedfeature[$o][] = $gigpackagefeature->id;
                }

            }
        }
        
        if(is_array($postextra))
        {
            foreach($postextra as $o => $feat)
            {
                $dataextrafeature = [
                    'gig_id' => $request->head['gig_id'],
                    'gig_package_head_id' => $gigheadid,
                    'gig_feature_id' => $o,
                    'value' => $feat,
                ];
                $gigextrafeature = GigPackageExtraModel::firstOrCreate([
                    'gig_id' => $request->head['gig_id'],
                    'gig_package_head_id' => $gigheadid,
                    'gig_feature_id' => $dataextrafeature['gig_feature_id']
                ]);
                
                $gigextrafeature->gig_id = $request->head['gig_id'];
                $gigextrafeature->gig_package_head_id = $gigheadid;
                $gigextrafeature->gig_feature_id = $dataextrafeature['gig_feature_id'];
                $gigextrafeature->value = $dataextrafeature['value'];
                $gigextrafeature->save();
    
                $changedextra[] = $gigextrafeature->id;
            }
        }
        
        //dd($changedfeature,$changedextra,$request->all());

        #DB::connection()->enableQueryLog();
        if(is_array($changedfeature) and count($changedfeature) > 0)
        {
            foreach($changedfeature as $o => $feat)
            {
                $d = GigPackageFeatureModel::where(function($query) use ($gigheadid,$request,$feat,$o){
                    $query->where('gig_id','=',$request->head['gig_id']);
                    $query->where('gig_package_head_id','=',$gigheadid);
                    $query->where('gig_package_id','=',$o);
                })->whereNotIn('id',$feat)->delete();
            }
        }
        
        $d2 = GigPackageExtraModel::where(function($query) use ($gigheadid,$request,$changedextra){
            $query->where('gig_id','=',$request->head['gig_id']);
            $query->where('gig_package_head_id','=',$gigheadid);
            $query->whereNotIn('id',$changedextra);
        })->delete();
        #$queries = DB::getRawQueryLog();
        
        //dd($queries);

        return redirect()->route('admin.gigpackages.index')
            ->with('success', 'Gig updated successfully');
    }

    public function destroy($id)
    {
        DB::table("gig_package_head")->where('id', $id)->delete();
        return redirect()->route('admin.gigpackages.index')
            ->with('success', 'Gig deleted successfully');
    }
}
