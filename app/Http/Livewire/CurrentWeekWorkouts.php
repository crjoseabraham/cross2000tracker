<?php

namespace App\Http\Livewire;

use App\Models\Workout;
use Carbon\Carbon;
use Livewire\Component;

class CurrentWeekWorkouts extends Component
{
    public $athlete;
    protected $listeners = ['refreshList' => 'render'];

    public function render()
    {
        Carbon::setLocale('es');
        $thisWeek = Workout::select('*')->where('athlete_id', $this->athlete->id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->orderBy('date', 'desc')->get();

        $bestDay = $thisWeek->sortByDesc('total')->first();
        $worstDay = $thisWeek->sortBy('total')->first();

        return view('livewire.current-week-workouts', [
            'thisWeek' => $thisWeek,
            'bestDay' => $bestDay,
            'worstDay' => $worstDay
        ]);
    }
}
