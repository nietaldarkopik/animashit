<?php

namespace App\Http\Controllers\backend;


use App\Models\GigFeatureModel;
use App\Models\GigPackageHeadModel;
use App\Models\GigPackageModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Response;

class ServicesController extends Controller
{

    function __construct()
    {
        //$this->middleware(['permission:role-list|role-create|role-edit|role-delete'], ['only' => ['index', 'store']]);
        //$this->middleware(['permission:role-create'], ['only' => ['create', 'store']]);
        //$this->middleware(['permission:role-edit'], ['only' => ['edit', 'update']]);
        //$this->middleware(['permission:role-delete'], ['only' => ['destroy']]);
    }

    public function gigs(Request $request)
    {
        
    }

    public function gig_features(Request $request)
    {
        $filter = [];
        if(!empty($request->gig_id))
        {
            $filter['gig_id'] = $request->gig_id;
        }
        if(!empty($request->type))
        {
            $filter['type'] = $request->type;
        }
        $features = GigFeatureModel::orderBy('sort','ASC')->where(function($query) use ($filter) {
            if(is_array($filter) and count($filter) > 0)
            {
                if(isset($filter['gig_id']))
                {
                    $query->where('gig_id','=',$filter['gig_id']);
                }
                if(isset($filter['type']))
                {
                    $query->where('type','=',$filter['type']);
                }
            }
        })->get();

        $data = [
            'data' => $features,
            'message' => 'Ok',
            'status' => 1
        ];

        return Response::json($data);
    }

    public function gig_package_head(Request $request)
    {
        $filter = [];
        if(!empty($request->gig_id))
        {
            $filter['gig_id'] = $request->gig_id;
        }
        
        $gigpackages = GigPackageHeadModel::with(['packages.package','artist'])->where(function($query) use ($filter) {
            if(is_array($filter) and count($filter) > 0)
            {
                if(isset($filter['gig_id']))
                {
                    $query->where('gig_id','=',$filter['gig_id']);
                }
                if(isset($filter['type']))
                {
                    $query->where('type','=',$filter['type']);
                }
            }
        })->get();

        $data = [
            'data' => $gigpackages,
            'message' => 'Ok',
            'status' => 1
        ];

        return Response::json($data);
    }

    public function gig_packages(Request $request)
    {
        $filter = [];
        if(!empty($request->gig_id))
        {
            $filter['gig_id'] = $request->gig_id;
        }
        
        $gigpackages = GigPackageModel::with(['head.artist'])->where(function($query) use ($filter) {
            if(is_array($filter) and count($filter) > 0)
            {
                if(isset($filter['gig_id']))
                {
                    $query->where('gig_id','=',$filter['gig_id']);
                }
                if(isset($filter['type']))
                {
                    $query->where('type','=',$filter['type']);
                }
            }
        })->get();

        $data = [
            'data' => $gigpackages,
            'message' => 'Ok',
            'status' => 1
        ];

        return Response::json($data);
    }

}