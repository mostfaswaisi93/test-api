<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('/person', 'Api\v1\PersonController')
        ->only(['show', 'destroy', 'update', 'store']);

    Route::apiResource('/people', 'Api\v1\PersonController')
        ->only('index');
});

Route::prefix('v2')->group(function () {
    Route::apiResource('/person', 'Api\v2\PersonController')
        ->only('show');
});
