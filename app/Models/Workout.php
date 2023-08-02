<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'athlete_id', 'wod1', 'wod2', 'wod3', 'wod4', 'total'];

    public function athlete()
    {
        return $this->belongsTo('App\Models\Athlete');
    }

    public function exercise()
    {
        return $this->belongsTo('App\Models\Workout');
    }
}
