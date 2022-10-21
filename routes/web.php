<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//route CRUD
Route::get('/team','TeamController@index');
Route::get('/team/addteam','TeamController@addteam');
Route::post('/team/store','TeamController@store');
Route::get('/team/details','TeamController@details');
Route::get('/team/add','TeamController@add');
Route::get('/team/addinit','TeamController@addinit');
Route::get('/team/updatekeyresult','TeamController@updatekeyresult');
Route::get('/team/updateinit','TeamController@updateinit');
Route::post('/#','TeamController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
