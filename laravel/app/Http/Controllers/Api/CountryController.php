<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CountryModel;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user= CountryModel::get();
        
        return response($user, 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CountryModel $Country)
    {   
        $data = $Country->toArray();
        return response($data, 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CountryModel $countryModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CountryModel $countryModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CountryModel $countryModel)
    {
        //
    }
}
