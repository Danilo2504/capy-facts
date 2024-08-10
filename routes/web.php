<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\FactController;
use App\Http\Controllers\Api\V1\GeneralInformationController;
use App\Http\Controllers\Api\V1\ImageController;
use App\Http\Controllers\Api\V1\SourceController;

Route::group(["prefix" => 'v1', "namespace" => 'App\Http\Controllers\Api\V1'], function () {
    Route::resource('facts', FactController::class);

    Route::resource('sources', SourceController::class);

    Route::resource('capybara_images', ImageController::class);

    Route::resource('general_information', GeneralInformationController::class);
});

Route::get('/', function () {
    return view('welcome');
});
