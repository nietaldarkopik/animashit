<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CountryModel;
use App\Models\GigModel;
use App\Models\ProfileModel;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class AdmCustomersController extends Controller
{
    function __construct()
    {
        //$this->middleware(['permission:profile-list|profile-create|profile-edit|profile-delete'], ['only' => ['index', 'store']]);
        //$this->middleware(['permission:profile-create'], ['only' => ['create', 'store']]);
        //$this->middleware(['permission:profile-edit'], ['only' => ['edit', 'update']]);
        //$this->middleware(['permission:profile-delete'], ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $customers = ProfileModel::where('user_type','=',5)->orderBy('id', 'DESC')->paginate(5);
        return view('backend.pages.customers.index', compact('customers'));
    }

    public function create()
    {
        $countries = CountryModel::get();
        $users = User::get();
        $roles = Role::get();
        return view('backend.pages.customers.create', compact('countries','roles','users'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:profiles,name',
            //'user_type',
            //'user_id
            'nickname' => 'required|unique:profiles,nickname',
            'email' => '',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'country' => '',
            'phone' => '',
            'twitter' => '',
            'ig' => '',
            'facebook' => '',
            'youtube' => '',
        ]);

        $imageName = '';

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/customers'), $imageName);
        }
    
        $profile = ProfileModel::create([
            'name' => $request->input('name'),
            'nickname' => $request->input('nickname'),
            'email' => $request->input('email'),
            'avatar' => $imageName,
            'country' => $request->input('country'),
            'phone' => $request->input('phone'),
            'twitter' => $request->input('twitter'),
            'ig' => $request->input('ig'),
            'facebook' => $request->input('facebook'),
            'youtube' => $request->input('youtube'),
            'user_type' => 5,
        ]);

        return redirect()->route('admin.customers.index')
            ->with('success', 'Customer created successfully');
    }

    public function show($id)
    {
        $profile = ProfileModel::find($id);

        return view('backend.pages.customers.show', compact('profile'));
    }

    public function edit($id)
    {
        $profile = ProfileModel::find($id);
        $countries = CountryModel::get();
        $roles = Role::get();
        $users = User::get();
        
        return view('backend.pages.customers.edit', compact('profile', 'countries', 'users', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'nickname' => 'required',
        ]);

        $imageName = '';

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/customers'), $imageName);
        }
    
        $profile = ProfileModel::find($id);
        $profile->name = $request->input('name');
        $profile->nickname = $request->input('nickname');
        $profile->email = $request->input('email');
        if(!empty($imageName))
        {
            $profile->avatar = $imageName;
        }
        $profile->country = $request->input('country');
        $profile->phone = $request->input('phone');
        $profile->twitter = $request->input('twitter');
        $profile->ig = $request->input('ig');
        $profile->facebook = $request->input('facebook');
        $profile->youtube = $request->input('youtube');
        $profile->user_type = 5;
        $profile->save();

        return redirect()->route('admin.customers.index')
            ->with('success', 'Customer updated successfully');
    }

    public function destroy($id)
    {
        DB::table("profiles")->where('id', $id)->delete();
        return redirect()->route('admin.customers.index')
            ->with('success', 'Customer deleted successfully');
    }
}
