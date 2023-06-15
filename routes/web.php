<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmController;

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


Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('/');
Route::get('about', [App\Http\Controllers\WebController::class, 'about'])->name('about');
Route::get('about', [App\Http\Controllers\WebController::class, 'about'])->name('about');
Route::get('contact', [App\Http\Controllers\WebController::class, 'contact'])->name('contact');
Route::get('agents', [App\Http\Controllers\WebController::class, 'agents'])->name('agents');
Route::get('farmhouse_details', [App\Http\Controllers\WebController::class, 'farmhouse_details'])->name('farmhouse_details');
Route::get('farmhouse_lists', [App\Http\Controllers\WebController::class, 'farmhouse_lists'])->name('farmhouse_lists');


/*  Farm House */
Route::prefix('farms')->group(function () {

    Route::get('index', [FarmController::class, 'index'])->name('farms.index');
    Route::get('create', [FarmController::class, 'create'])->name('farms.create');

});


