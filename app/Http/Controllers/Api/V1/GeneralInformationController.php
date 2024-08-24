<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\GeneralInformationResource;
use App\Models\GeneralInformation;
use Illuminate\Http\Request;

class GeneralInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Storage::disk('public')->put('example_public.txt', 'Contenido accesible para el publico');
        return new GeneralInformationResource(GeneralInformation::first());
    }

    public function showDataByField(string $field)
    {
        $allowedFields = [
            'scientific_name',
            'description',
            'weight',
            'height',
            'length',
            'habitat',
            'distribution',
            'conservation_status'
        ];

        if (!in_array($field, $allowedFields)) {
            return response('Not found', 404);
        }

        $generalInformation = GeneralInformation::first();

        if (!$generalInformation) {
            return response()->json(['message' => 'General information not found'], 404);
        }

        $value = $generalInformation->$field;

        if (is_string($value) && preg_match('/^\s*[\[\{].*[\}\]]\s*$/s', $value)) {
            $value = json_decode($value);
        }
        return response()->json([$field => $value], 200);
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
    public function show(GeneralInformation $generalInformation)
    {
        return new GeneralInformationResource($generalInformation);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeneralInformation $generalInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GeneralInformation $generalInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GeneralInformation $generalInformation)
    {
        //
    }
}
