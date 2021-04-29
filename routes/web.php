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

Route::get('/', function () {
    return view('welcome');
});

Route::get('artist', 'App\Http\Controllers\ArtistController@index');    //App\Http\Controllers (important)
Route::get('artist/{id}', 'App\Http\Controllers\ArtistController@show');

Route::get('type', 'App\Http\Controllers\TypeController@index')->name('type_index');
Route::get('type/{id}', 'App\Http\Controllers\TypeController@show')->where('id', '[0-9]+')->name('type_show');
Route::get('locality', 'App\Http\Controllers\LocalityController@index');
Route::get('locality/{id}', 'App\Http\Controllers\LocalityController@show');
Route::get('role', 'App\Http\Controllers\RoleController@index');
Route::get('role/{id}', 'App\Http\Controllers\RoleController@show');
Route::get('location', 'App\Http\Controllers\LocationController@index');
Route::get('location/{id}', 'App\Http\Controllers\LocationController@show');
Route::get('show', 'App\Http\Controllers\ShowController@index');
Route::get('show/{id}', 'App\Http\Controllers\ShowController@show');
Route::get('representation', 'App\Http\Controllers\RepresentationController@index');
Route::get('representation/{id}', 'App\Http\Controllers\RepresentationController@show');

Route::get('type/edit/{id}', [App\Http\Controllers\TypeController::class, 'edit'])->where('id', '[0-9]+')->name('type_edit');
Route::put('type/{id}', [App\Http\Controllers\TypeController::class, 'update'])->where('id', '[0-9]+')->name('type_update');

