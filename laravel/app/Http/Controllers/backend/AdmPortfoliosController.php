<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GigModel;
use App\Models\GigPackageModel;
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
        return view('backend.pages.portfolios.create',compact('gigs','packages','gigpackages','customers'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:portfolios,title'
        ]);

        $portfolio = PortfolioModel::create(['title' => $request->input('title'),'description' => $request->input('description')]);

        return redirect()->route('admin.portfolios.index')
            ->with('success', 'Portfolio created successfully');
    }

    public function show(PortfolioModel $portfolioModel)
    {
        $portfolio = $portfolioModel;

        return view('backend.pages.portfolios.show', compact('portfolio'));
    }

    public function edit(PortfolioModel $portfolioModel)
    {
        $portfolio = $portfolioModel;

        return view('backend.pages.portfolios.edit', compact('portfolio'));
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
