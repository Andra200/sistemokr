<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//route CRUD team
Route::get('/team','TeamController@index');
Route::get('/team/addteam','TeamController@addteam');
Route::post('/team/store','TeamController@store');
Route::get('/team/details','TeamController@details');
Route::get('/team/add','TeamController@add');
Route::get('/team/addinit','TeamController@addinit');
Route::get('/team/updatekeyresult','TeamController@updatekeyresult');
Route::get('/team/updateinit','TeamController@updateinit');
Route::post('/#','TeamController@index');

//route objective
Route::post('/createObjective','ObjectiveController@storeObjective');
Route::get('/objective','ObjectiveController@getAllObjective');
Route::get('/objective/create','ObjectiveController@create');
Route::post('/objective/store','ObjectiveController@store');
Route::get('/objective/edit/{id}','ObjectiveController@edit')->name('ObjectiveEdit');
Route::put('/objective/update','ObjectiveController@update')->name('ObjectiveUpdate');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
