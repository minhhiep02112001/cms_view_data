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

Route::get('/danh-muc/{url}', [\App\Http\Controllers\ClientController::class,'categoriesList'])->name('categories');

Route::get('/{url}.html', [\App\Http\Controllers\ClientController::class , 'detailsPost'])->name('detail.post');

Route::get('/author/{author}' , [\App\Http\Controllers\ClientController::class,'detailsAuthor'])->name('author.details');


Route::get('/login' , [\App\Http\Controllers\AuthController::class,'login'])->name('admin.login');
Route::post('/login' , [\App\Http\Controllers\AuthController::class,'postLogin'])->name('post.admin.login');
Route::get('/logout' , [\App\Http\Controllers\AuthController::class,'logout'])->name('admin.logout');

Route::group([
    'prefix' =>'admin',
    'middleware' => 'check.login'
], function (){
    Route::get('/',function (){
        return view('admin.index');
    })->name('admin.index');
    Route::resource('author' , \App\Http\Controllers\AuthorController::class);
    Route::resource('category' , \App\Http\Controllers\CategoryController::class);
});
