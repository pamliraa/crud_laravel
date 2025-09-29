<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/movies", [MovieController::class, "index"])->name("index");
Route::get("/movies", [MovieController::class, "create"])->name("create");
Route::post("/movies",[MovieController::class, "store"])->name("store");