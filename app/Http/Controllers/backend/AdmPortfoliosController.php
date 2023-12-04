<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GigModel;
use App\Models\GigPackageModel;
use App\Models\PortfolioMediaModel;
use App\Models\PortfolioModel;
use App\Models\ProfileModel;
use Illuminate\Http\Request;

class AdmPortfoliosController extends Controller
{
    function __construct()
    {
        //$this->middleware(['permission:portfolio-list|portfolio-create|portfolio-edit|portfolio-delete'], ['only' => ['index', 'store']]);
        //$this->middleware(['permission:portfolio-create'], ['only' => ['create', 'store']]);
        //$this->middleware(['permission:portfolio-edit'], ['only' => ['edit', 'update']]);
        //$this->middleware(['permission:portfolio-delete'], ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $do_action = $request->input('do_action');
        $do_reset = $request->input('do_reset');
        if($do_action == 'do_filter')
        {
            $post_filter = $request->input('filter');
            $request->session()->put('filter_gigfeature',$post_filter);
        }
        if($do_action == 'do_reset')
        {
            $post_filter = $request->input('filter');
            $request->session()->put('filter_gigfeature',[]);
        }
        
        $post_filter = $request->session()->get('filter_gigfeature');
        
        $gigs = GigModel::orderBy('id', 'DESC')->get();
        $portfolios = PortfolioModel::when($do_action, function($query) use ($post_filter){
            if(isset($post_filter['gig_id']) and !empty($post_filter['gig_id']))
            {
                $query->where('gig_id',$post_filter['gig_id']);
            }
            if(isset($post_filter['gig_package_id']) and !empty($post_filter['gig_package_id']))
            {
                $query->where('gig_package_id',$post_filter['gig_package_id']);
            }
            if(isset($post_filter['keyword']) and !empty($post_filter['keyword']))
            {
                $query->where('title','like','%'.$post_filter['keyword'].'%');
            }
            return $query;
        })->orderBy('gig_id', 'ASC')->paginate(20);

        $gigs = GigModel::all();
        $artists = ProfileModel::where('user_type','=', 4)->get();
        $customers = ProfileModel::where('user_type','=', 5)->get();
        $gig_packages = GigPackageModel::orderBy('gig_id','asc')->orderBy('package_id','asc')->orderBy('gig_package_head_id','asc')->get();
        $packages = PackageModel::orderBy('sort','asc')->get();

        return view('backend.pages.portfolios.index', compact('portfolios','gigs','customers','gig_packages','packages'));
    }

    public function create()
    {
        $gigs = GigModel::all();
        $packages = GigModel::all();
        $gigpackages = GigPackageModel::all();
        $customers = ProfileModel::where('user_type','=',5)->get();
        $artists = ProfileModel::where('user_type','=',4)->get();
        return view('backend.pages.portfolios.create',compact('gigs','packages','gigpackages','customers','artists'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'gig_id' => 'required',
            'gig_package_id' => 'required',
            'customer_id' => 'required',
        ]);
    
        $data = [];
        $data['gig_id'] = $request->input('gig_id');
        $data['gig_package_id'] = $request->input('gig_package_id');
        $data['customer_id'] = $request->input('customer_id');
        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');

        $portfolio = PortfolioModel::create($data);
        $new_medias = new PortfolioMediaModel;

        $new_medias->uploadMedia($portfolio->id, $request->input('media'),$request->file('media'));
        
        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio created successfully');
    }

    public function show(PortfolioModel $portfolioModel)
    {
        $portfolio = $portfolioModel;
        $gigs = GigModel::all();
        $packages = GigModel::all();
        $gigpackages = GigPackageModel::all();
        $customers = ProfileModel::where('user_type','=',5)->get();
        $artists = ProfileModel::where('user_type','=',4)->get();
        $featureList  = []; 

        return view('backend.pages.portfolios.show', compact('portfolio','gigs','packages','gigpackages','customers','artists','featureList'));
    }

    public function edit(PortfolioModel $portfolio)
    {
        $gigs = GigModel::all();
        $packages = GigModel::all();
        $gigpackages = GigPackageModel::all();
        $customers = ProfileModel::where('user_type','=',5)->get();
        $artists = ProfileModel::where('user_type','=',4)->get();
        $featureList  = []; 
        $extraFeatureList  = []; 
        return view('backend.pages.portfolios.edit', compact('portfolio','gigs','packages','gigpackages','customers','artists','featureList','extraFeatureList'));
    }

    public function update(Request $request, PortfolioModel $portfolioModel)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $portfolio = $portfolioModel;
        $portfolio->title = $request->input('title');
        $portfolio->description = $request->input('description');
        $portfolio->save();

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio updated successfully');
    }

    public function destroy(PortfolioModel $portfolioModel)
    {
        $portfolioModel->delete();
        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio deleted successfully');
    }
}
