<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RepresentationController;
use App\Http\Controllers\ShowController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/artist',[ArtistController::class,'index'])->name('artist_index');
Route::get('/artist/{id}',[ArtistController::class,'show'])->where('id','[0-9]+')->name('artist_show');
Route::get('/artist/edit/{id}',[ArtistController::class,'edit'])->where('id','[0-9]+')->name('artist_edit');
Route::put('/artist/update/{id}',[ArtistController::class,'update'])->where('id','[0-9]+')->name('artist_update');



Route::get('/location',[LocationController::class,'index'])->name('location_index');
Route::get('/location/{id}',[LocationController::class, 'show'])->where('id','[0-9]+')->name('location_show');

Route::get('/locality',[LocalityController::class,'index'])->name('locality_index');
Route::get('/locality/{id}',[LocalityController::class,'show'])->where('id','[0-9]+')->name('locality_show');

Route::get('/representation',[RepresentationController::class,'index'])->name('representation_index');
Route::get('/representation/{id}',[RepresentationController::class, 'show'])->where('id','[0-9]+')->name('representation_show');

Route::get('/role',[RoleController::class,'index'])->name('role_index');
Route::get('/role/{id}',[RoleController::class,'show'])->where('id','[0-9]+')->name('role_show');

Route::get('/show',[ShowController::class,'index'])->name('show_index');
Route::get('/show/{id}',[ShowController::class,'show'])->where('id','[0-9]+')->name('show_show');

Route::get('/type',[TypeController::class,'index'])->name('type_index');
Route::get('/type/{id}',[TypeController::class, 'show'])->where('id','[0-9]+')->name('type_show');
