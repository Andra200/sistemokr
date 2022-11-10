<?php

use App\Http\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObjectiveController;



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
//Route::get('/objective','ObjectiveController@getAllObjective');
Route::get('/objective',[ObjectiveController::class, 'index'])->name('objective.index');
Route::get('/objective/destroy',[ObjectiveController::class, 'destroy'])->name('objective.destroy');

Route::get('/objective/create',[ObjectiveController::class, 'create'])->name('objective.create');
Route::post('/objective/store',[ObjectiveController::class, 'store'])->name('objective.store');
Route::get('/objective/edit/{id}','ObjectiveController@edit')->name('objective.edit');
Route::put('/objective/update',[ObjectiveController::class, 'update'])->name('objective.update');

//Route::resource('objective', ObjectiveController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
