<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController;
use App\Http\Controllers\Guest\PagesController;

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

Route::get('/', [PagesController::class,'index'])->name('home');

Route::resource('comics', ComicController::class);

