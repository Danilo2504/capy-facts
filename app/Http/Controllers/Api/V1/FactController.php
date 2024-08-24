<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\FactResource;
use App\Http\Resources\V1\SourceResource;
use App\Models\Fact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FactResource::collection(Fact::paginate(15));
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
    public function show(Fact $fact)
    {
        return new FactResource($fact);
    }

    public function newest()
    {
        return new FactResource(Fact::orderBy('created_at', 'desc')->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fact $fact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fact $fact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fact $fact)
    {
        return $fact->delete();
    }
}
