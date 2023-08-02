<?php

namespace App\Http\Livewire;

use App\Models\Workout;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class WeeklyStats extends Component
{
    public function render()
    {
        Carbon::setLocale('es');


        $workouts = Workout::select('athlete_id', 'date', 'total', DB::raw("MAX(total) as max_total"))
            ->groupBy('athlete_id', 'date', 'total')
            ->orderByRaw("CAST(total as UNSIGNED) DESC")
            ->get();

        $weekWorkouts = $workouts->sortByDesc('total')
            ->whereBetween('date', [Carbon::now()->startOfWeek(Carbon::SUNDAY), Carbon::now()->endOfWeek(Carbon::SUNDAY)])
            ->unique('athlete_id');

        // $weekWorkouts = Workout::select('athlete_id', 'date', 'total')
        //     ->distinct()
        //     ->orderBy('total', 'DESC')
        //     ->whereBetween('date', [
        //         Carbon::now()->startOfWeek(Carbon::MONDAY),
        //         Carbon::now()->endOfWeek(Carbon::SUNDAY)
        //     ])
        //     ->simplePaginate(5);

        return view('livewire.weekly-stats', compact('weekWorkouts'));
    }
}
