<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercisesController;

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

// oi vey, i can't figure out how to properly include the exercise controller in my tests. the routes should be:
// Route::get('/exercises', 'ExercisesController@index');
// Route::get('/exercises/{exercise}', 'ExercisesController@show');
// Route::post('/exercises', 'ExercisesController@store');
// But then my tests say they can't find the ExercisesController, and i don't want to spend the time figuring it out right now. 
// @ToDo: 1
// Well shucks, it looks like laravel has outgrown me: 
    // "In previous releases of Laravel, the RouteServiceProvider contained a $namespace property. This property's value would automatically be prefixed onto controller route definitions and calls to the action helper / URL::action method. In Laravel 8.x, this property is null by default. This means that no automatic namespace prefixing will be done by Laravel." Laravel 8.x Docs - Release Notes
// Route::get('/exercises', [ExercisesController::class, 'index']);
// Route::get('/exercises/{exercise}', [ExercisesController::class, 'show']);
// Route::post('/exercises', [ExercisesController::class, 'store']);

// Alright, now that we've got tests passing, let's just resource all the crud routes, and get some boilerplate up to get this thing working
Route::resource('exercises', ExercisesController::class);

