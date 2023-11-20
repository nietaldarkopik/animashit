<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\homemodel;
use App\Models\PageModel;
use App\Models\ProfileModel;
use App\Models\GigModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
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

    public function artistDetail($id)
    {
        $artist = ProfileModel::where('id','=', $id)->get()->first();
        $template = 'gig-detail';
        return view('frontend.templates.'.$template);
    }

}
