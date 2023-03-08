<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/details', [App\Http\Controllers\HomeController::class, 'show_data']);
Route::post('/save', [App\Http\Controllers\HomeController::class, 'save_data']);
Route::get('/get-data', [App\Http\Controllers\HomeController::class, 'get_data']);
Route::post('/save-form', [App\Http\Controllers\HomeController::class, 'save_form']);