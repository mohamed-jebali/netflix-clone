<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\AdminController;

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
    return view('home');
});

Auth::routes();

Route::middleware(['auth','verified'])->prefix("admin")->name("admin.")->group(function (){
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->middleware('auth')->name('dashboard');
    Route::get('/create', [App\Http\Controllers\Admin\AdminController::class, 'create'])->middleware('auth')->name('create');
    Route::post('/store', [App\Http\Controllers\Admin\AdminController::class, 'store'])->middleware('auth')->name('store');
});

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
