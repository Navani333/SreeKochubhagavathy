<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontEndController;

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

Route::get('/', [frontEndController::class, 'home'])->name('home');
Route::get('/history', [frontEndController::class, 'history'])->name('history');
Route::get('/festivals', [frontEndController::class, 'festivals'])->name('festivals');
Route::get('/upadevadas', [frontEndController::class, 'upadevadas'])->name('upadevadas');
Route::get('/gallery', [frontEndController::class, 'gallery'])->name('gallery');
Route::get('/contact', [frontEndController::class, 'contact'])->name('contact');
Route::get('/office_bearers', [frontEndController::class, 'office_bearers'])->name('office_bearers');

