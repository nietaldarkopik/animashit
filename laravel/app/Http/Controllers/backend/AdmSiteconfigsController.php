<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SettingModel;
use DB;
use Illuminate\Http\Request;

class AdmSiteconfigsController extends Controller
{
    protected $type = ['frontend','backend','global','page'];

    function __construct()
    {
        //$this->middleware(['permission:siteconfig-list|siteconfig-create|siteconfig-edit|siteconfig-delete'], ['only' => ['index', 'store']]);
        //$this->middleware(['permission:siteconfig-create'], ['only' => ['create', 'store']]);
        //$this->middleware(['permission:siteconfig-edit'], ['only' => ['edit', 'update']]);
        //$this->middleware(['permission:siteconfig-delete'], ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $siteconfigs = SettingModel::orderBy('id', 'DESC')->paginate(5);
        return view('backend.pages.siteconfigs.index', compact('siteconfigs'));
    }

    public function create()
    {
        $types = $this->type;
        return view('backend.pages.siteconfigs.create', compact('types'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'keyword' => 'required|unique:settings,keyword',
            'type' => 'required',
            'title' => 'required',
            'value' => 'required',
            'description' => '',
        ]);

        $siteconfig = SettingModel::create([
            'keyword' => $request->input('keyword'),
            'type' => $request->input('type'),
            'title' => $request->input('title'),
            'value' => $request->input('value'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.siteconfigs.index')
            ->with('success', 'Config created successfully');
    }

    public function show($id)
    {
        $siteconfig = SettingModel::find($id);
        $types = SettingModel::find($id);

        return view('backend.pages.siteconfigs.show', compact('siteconfig',  'types'));
    }

    public function edit($id)
    {
        $siteconfig = SettingModel::find($id);
        $types = $this->type;
        return view('backend.pages.siteconfigs.edit', compact('siteconfig', 'types'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'keyword' => 'required',
            'type' => 'required',
            'title' => 'required',
            'value' => 'required',
            'description' => '',
        ]);

        $siteconfig = SettingModel::find($id);
        $siteconfig->keyword = $request->input('keyword');
        $siteconfig->type = $request->input('type');
        $siteconfig->title = $request->input('title');
        $siteconfig->value = $request->input('value');
        $siteconfig->description = $request->input('description');
        $siteconfig->save();

        return redirect()->route('admin.siteconfigs.index')
            ->with('success', 'Config updated successfully');
    }

    public function destroy($id)
    {
        DB::table("siteconfigs")->where('id', $id)->delete();
        return redirect()->route('admin.siteconfigs.index')
            ->with('success', 'Config deleted successfully');
    }
}
