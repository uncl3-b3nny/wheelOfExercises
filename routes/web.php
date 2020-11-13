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

Route::post('/exercises', function () {
    // validate

    // persist 
    App\Models\Exercise::create(request(['name','description','number of reps']));
    // redirect
});

Route::get('/exercises', function () {
    // query all exercises, store them in a variable
    $exercises = App\Models\Exercise::all();

    //and pass them to the view
    return view('exercises.index', compact('exercises'));

});