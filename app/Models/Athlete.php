<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'dob'];

    public function workouts()
    {
        return $this->hasMany('App\Models\Workout');
    }
}
