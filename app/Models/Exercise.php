<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    // protected $guarded = [];
    // I'm testing code spaces by editing this comment;
    protected $attributes = [
       'number of reps' => 15
    ];

    public function path()
    {
        return"/exercises/{$this->id}";
    }

    protected $fillable = [
        'name',
        'description',
        'number of reps'
    ];
}
