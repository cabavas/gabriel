<?php

use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/lead',[LeadController::class,"store"])->name("lead.store");
Route::middleware("auth")->group(function() {
    Route::get('lead',[LeadController::class,"index"]);

});