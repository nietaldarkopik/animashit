<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\homemodel;
use App\Models\PageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = PageModel::where("slug","home")->first();
        return view('frontend.templates.home',compact('page'));
    }

}
