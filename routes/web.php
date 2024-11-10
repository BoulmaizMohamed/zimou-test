<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//dashboard

Route::get('/packages', [PackageController::class, 'index'])->name('packages.index')->middleware('auth');
Route::get('/packages/export', [PackageController::class, 'exportPackages'])->name('packages.export')->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
