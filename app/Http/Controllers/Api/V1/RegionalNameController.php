<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\RegionalNameResource;
use App\Models\RegionalName;
use Illuminate\Http\Request;

class RegionalNameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RegionalNameResource::collection(RegionalName::all());
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
    public function show(RegionalName $regionalName)
    {
        return new RegionalNameResource($regionalName);
    }

    public function showByCountry(string $country)
    {
        $country = strtoupper($country);
        return RegionalNameResource::collection(RegionalName::where('country', '=', $country)->get());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegionalName $regionalName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegionalName $regionalName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegionalName $regionalName)
    {
        return $regionalName->delete();
    }
}
