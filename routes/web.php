<?php

use App\Http\Controllers\aboutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;

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
// affichege by controller 
Route::get('/', [homeController::class , 'index']);
Route::get('/profile', [ProfileController::class , 'index']);
Route::get('/about', [aboutController::class , 'index']);


