<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\FactController;
use App\Http\Controllers\Api\V1\GeneralInformationController;
use App\Http\Controllers\Api\V1\ImageController;
use App\Http\Controllers\Api\V1\RegionalNameController;
use App\Http\Controllers\Api\V1\SourceController;
use App\Http\Resources\V1\GeneralInformationResource;
use App\Http\Resources\V1\ImageResource;
use App\Models\GeneralInformation;
use App\Models\Image;
use Illuminate\Support\Facades\View;

//Api

Route::group(["prefix" => 'v1', "namespace" => 'App\Http\Controllers\Api\V1'], function () {
    Route::get('facts/newest', [FactController::class, 'newest']);

    Route::resource('facts', FactController::class);

    Route::resource('sources', SourceController::class);

    Route::get('images/newest', [ImageController::class, 'newest']);

    Route::resource('images', ImageController::class);

    Route::get('regional_names/{country}', [RegionalNameController::class, 'showByCountry'])->whereAlpha('country');

    Route::resource('regional_names', RegionalNameController::class);

    Route::get('general_information/{field}', [GeneralInformationController::class, 'showDataByField']);

    Route::resource('general_information', GeneralInformationController::class);
});

//Front end

Route::view('/', 'home');

Route::get('/cute-images', function () {
    $images = ImageResource::collection(Image::paginate(5));
    return View::make('images', ['images' => $images]);
});

Route::get('about-capys', function () {
    $info = new GeneralInformationResource(GeneralInformation::first());

    return View::make('aboutCapys', ['data' => $info]);
});
