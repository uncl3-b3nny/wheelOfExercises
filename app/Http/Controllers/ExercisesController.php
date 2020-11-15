<?php

namespace App\Http\Controllers;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    //
    public function index()
    {
    // query all exercises, store them in a variable
    $exercises = Exercise::all();

    //and pass them to the view
    return view('exercises.index', compact('exercises'));

    }

    public function store()
    {
    
    // validate
    $attributes = request()->validate(['name' => 'required', 'description' => 'required', 'number of reps' => 'required']);
    
    // persist 
    Exercise::create($attributes);
    
    // redirect    
    return redirect('/exercises');
    
    }
}
