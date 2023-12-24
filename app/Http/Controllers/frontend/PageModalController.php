<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\GigPackageHeadModel;
use App\Models\homemodel;
use App\Models\PageModel;
use App\Models\PortfolioModel;
use App\Models\ProfileModel;
use App\Models\GigModel;

use App\Models\ScheduleModel;
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
        return view('frontend.modals.'.$template,compact('page'));
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
    
    public function gigDetail($gig_id = 0)
    {
        $gig = GigModel::where('id',$gig_id)->get()->first();
        $package_heads = GigPackageHeadModel::where('gig_id',$gig_id)->with([
            'packages' => function($query)
            {
                $query->orderBy('sort','ASC');
            }
        ])->get();
        $portfolios = PortfolioModel::where('gig_id',$gig_id)->where('status','publish')->has('media')->get();

        //dd(compact('artist','package_heads','portfolios','gig'));
        return view('frontend.modals.gig-detail',compact('package_heads','portfolios','gig'));
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
    
    public function scheduleArtist($id = 0)
    {
        $from = date("Y-m-d",strtotime("-30 month"));
        $to = date("Y-m-d",strtotime("+30 month"));
        $schedules = ScheduleModel::where('artist_id',$id)->where(function($query) use ($from,$to){
            $query->whereBetween('start_date', [$from, $to]);
            $query->orWhereBetween('end_date', [$from, $to]);
        })->orderBy('start_date','ASC')->get()->groupBy(function($data){
            return $data->start_date;
        });
        #dd($schedules);
        return view('frontend.modals.schedule-artist',compact('schedules'));
    }

}
