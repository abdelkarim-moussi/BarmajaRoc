<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
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



Route::get('/article/1', function () {
    return view('dashboard');});

Route::get('/article/{id}',[ArticleController::class, 'show'])->name('detaile.show');
Route::delete('/article/{id}',[ArticleController::class, 'destroy'])->name('article.destroy');
require __DIR__.'/auth.php';
