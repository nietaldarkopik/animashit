<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\GigPackageHeadModel;
use App\Models\homemodel;
use App\Models\PageModel;
use App\Models\PortfolioModel;
use App\Models\ProfileModel;
use App\Models\GigModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageModalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($page = 'home')
    {
        $page = PageModel::where('slug','=', $page)->get()->first();
        $template = $page->template ?? 'home';
        return view('frontend.templates.'.$template,compact('page'));
    }
    
    public function artistDetail($id = 0,$gig_id = 0)
    {
        $artist = ProfileModel::where('id',$id)->get()->first();
        $gig = GigModel::where('id',$gig_id)->get()->first();
        $package_heads = GigPackageHeadModel::where('gig_id',$gig_id)->where('profile_id',$id)->with([
            'packages' => function($query)
            {
                $query->orderBy('sort','ASC');
            }
        ])->get();
        $porfolios = PortfolioModel::where('gig_id',$gig_id)->where('artist_id',$id)->with([
            'media' => function($query)
            {
                $query->orderBy('id','DESC');
            }
        ])->get();

        //dd(compact('artist','package_heads','porfolios','gig'));
        return view('frontend.modals.artist-detail',compact('artist','package_heads','porfolios','gig'));
    }
    
    public function artistPortfolios($id = 0, $gig_id = 0)
    {
        $gig = GigModel::where('id',$gig_id)->get()->first();
        return view('frontend.modals.artist-portfolios',compact('gig'));
    }
    
    public function portfolioDetail($id = 0)
    {
        $portfolio = PortfolioModel::where('id',$id)->get()->first();
        $artist = $portfolio->profile;
        $client = $portfolio->client;
        $package = $portfolio->gigPackage;
        $gig = $portfolio->gig;
        $medias = $portfolio->media;
        return view('frontend.modals.portfolio-detail',compact('portfolio','artist','client','package','gig','medias'));
    }

}
