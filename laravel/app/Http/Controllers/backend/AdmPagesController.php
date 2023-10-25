<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PageModel;
use Illuminate\Http\Request;

class AdmPagesController extends Controller
{
    protected $status = [
        'draft',
        'publish',
        'private'
    ];

    protected $templates = [
        'default',
        'home',
        'page',
        'gig-list',
        'gig-detail',
        'artist-list',
        'artist-detail',
        'portfolio-list',
        'portfolio-detail'
    ];

    function __construct()
    {
        //$this->middleware(['permission:page-list|page-create|page-edit|page-delete'], ['only' => ['index', 'store']]);
        //$this->middleware(['permission:page-create'], ['only' => ['create', 'store']]);
        //$this->middleware(['permission:page-edit'], ['only' => ['edit', 'update']]);
        //$this->middleware(['permission:page-delete'], ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $pages = PageModel::orderBy('id', 'DESC')->paginate(5);
        return view('backend.pages.pages.index', compact('pages'));
    }

    public function create()
    {
        $templates = $this->templates;
        $status = $this->status;
        return view('backend.pages.pages.create', compact('templates','status'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'slug' => 'required|unique:pages,slug',
            'title' => 'required',
            'description' => '',
            'status' => 'required',
            'template' => 'required'
        ]);

        $page = PageModel::create([
            'slug' => $request->input('slug'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'template' => $request->input('template'),
        ]);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page created successfully');
    }

    public function show($id)
    {
        $page = PageModel::find($id);
        return view('backend.pages.pages.show', compact('page'));
    }

    public function edit($id)
    {
        $page = PageModel::find($id);
        $templates = $this->templates;
        $status = $this->status;

        return view('backend.pages.pages.edit', compact('page', 'templates', 'status'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'slug' => 'required',
            'title' => 'required',
            'description' => '',
            'status' => 'required',
            'template' => 'required',
        ]);

        $page = PageModel::find($id);
        $page->slug = $request->input('slug');
        $page->title = $request->input('title');
        $page->description = $request->input('description');
        $page->status = $request->input('status');
        $page->template = $request->input('template');
        $page->save();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page updated successfully');
    }

    public function destroy($id)
    {
        DB::table("pages")->where('id', $id)->delete();
        return redirect()->route('admin.pages.index')
            ->with('success', 'Page deleted successfully');
    }
}
