<?php

use App\Http\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\KeyresultController;
use App\Http\Controllers\ObjectiveController;



Route::get('/', function () {
    return view('welcome');
});

//route CRUD team
//Route::get('/team','TeamController@index');
Route::get('/team/addteam','TeamController@addteam');
//Route::post('/team/store','TeamController@store');
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
Route::post('/objective/destroy/{id}',[ObjectiveController::class, 'destroy'])->name('objective.destroy');

Route::get('/objective/create',[ObjectiveController::class, 'create'])->name('objective.create');
Route::post('/objective/store',[ObjectiveController::class, 'store'])->name('objective.store');
Route::get('/objective/edit/{id}',[ObjectiveController::class, 'edit'])->name('objective.edit');
Route::put('/objective/update/{id}',[ObjectiveController::class, 'update'])->name('objective.update');

//Route::resource('objective', ObjectiveController::class);

//route team
Route::get('/team',[TeamController::class, 'index'])->name('team.index');
Route::post('/team/store',[TeamController::class, 'store'])->name('team.store');
Route::get('/team/create',[TeamController::class, 'create'])->name('team.create');
//Route::get('/team/edit/{id}','TeamController@edit')->name('team.edit');
//Route::put('/team/update/{id}',[TeamController::class, 'update'])->name('team.update');


//route keyresult
Route::get('/keyresult',[KeyresultController::class, 'index'])->name('keyresult.index');
Route::post('/keyresult/store',[KeyresultController::class, 'store'])->name('keyresult.store');
Route::get('/keyresult/create',[KeyresultController::class, 'create'])->name('keyresult.create');
Route::get('/keyresult/edit/{id}',[KeyresultController::class, 'edit'])->name('keyresult.edit');
Route::put('/keyresult/update/{id}',[KeyresultController::class, 'update'])->name('keyresult.update');
Route::post('/keyresult/destroy/{id}',[KeyresultController::class, 'destroy'])->name('keyresult.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
