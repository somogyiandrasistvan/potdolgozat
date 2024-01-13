<?php

use App\Http\Controllers\lessonsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/ptype/", [lessonsController::class, "listView"]);
Route::get("/ptype/edit/{id}", [lessonsController::class, "editView"]);
Route::get("/ptype/new/", [lessonsController::class, "newView"]);
Route::get("/ptype/del/", [lessonsController::class, "delView"]);

Route::get("/api/ptype/", [lessonsController::class, "list"]);
Route::put("/api/ptype/{id}", [lessonsController::class, "edit"]);
Route::post("/api/ptype/", [lessonsController::class, "new"]);
Route::delete("/api/ptype/{id}", [lessonsController::class, "del"]);