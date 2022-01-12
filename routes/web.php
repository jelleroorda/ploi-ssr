<?php

use App\Http\Controllers\BackgroundInformationController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomepageController;
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

Route::get('/', HomepageController::class);

Route::get('background-information', BackgroundInformationController::class);

Route::fallback(FallbackController::class);
