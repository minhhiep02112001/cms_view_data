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

Route::get('/', [\App\Http\Controllers\ClientController::class,'listPost']);

Route::get('/{url}', [\App\Http\Controllers\ClientController::class,'categoriesList'])->name('categories');

Route::get('post/{url}.html', [\App\Http\Controllers\ClientController::class , 'detailsPost'])->name('detail.post');

Route::get('/author/{author}' , [\App\Http\Controllers\ClientController::class,'detailsAuthor'])->name('author.details');
