<?php

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

Route::get('api/lessons', [lessonsController::class, 'index']);
Route::get('api/lessons/{id}', [lessonsController::class, 'show']);
Route::post('api/lessons', [lessonsController::class, 'store']);
Route::put('api/lessons/{id}', [lessonsController::class, 'update']);
Route::delete('api/lessons/{id}', [lessonsController::class, 'destroy']);
Route::get('api/users', [lessonsController::class, 'index']);
Route::get('lessons/new', [lessonsController::class, 'newView']);
Route::get('lessons/edit/{id}', [lessonsController::class, 'editView']);
Route::get('lessons/list', [lessonsController::class, 'listView']);