<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AminitiesController;

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

Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => 'home'], function () {
    Route::get('/', [HomeController::class, 'index']);
    // Route::get('/sky-longue', [AminitiesController::class, 'sky_longue']);
    // Route::get('/ball-room', [AminitiesController::class, 'ball_room']);
    // Route::get('/pavilion', [AminitiesController::class, 'pavilion']);

    Route::get('/{page}', [AminitiesController::class, 'index'])->name('home.page');;
});

Route::get('/residences', [HomeController::class, 'residences']);
Route::get('/neighborhood', [HomeController::class, 'neighborhood']);
Route::get('/contact', [HomeController::class, 'contact']);


Route::get('/send-email', [EmailController::class, 'sendEmail']);
