<?php

namespace App\Http\Livewire;

use App\Models\Workout;
use Carbon\Carbon;
use Livewire\Component;

class AthleteWorkouts extends Component
{
    public $athlete;

    protected $listeners = ['refreshList' => 'render'];

    public function render()
    {
        Carbon::setLocale('es');
        $workouts = Workout::where('athlete_id', $this->athlete->id)->orderBy('date', 'desc')->paginate(7);
        return view('livewire.athlete-workouts', compact('workouts'));
    }
}
