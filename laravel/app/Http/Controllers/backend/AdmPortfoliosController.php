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
        $gigs = GigModel::all();
        $portfolios = PortfolioModel::orderBy('id', 'DESC')->paginate(5);
        return view('backend.pages.portfolios.index', compact('portfolios','gigs'));
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
