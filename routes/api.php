<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TechnicianController;

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/locations/{serviceId}', [LocationController::class, 'byService']);
Route::get('/technicians/{serviceId}/{locationId}', [TechnicianController::class, 'byServiceAndLocation']);

Route::get('/test', function() {
    return response()->json(['status' => 'API is working']);
});