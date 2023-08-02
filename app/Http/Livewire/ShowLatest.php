<?php

namespace App\Http\Livewire;

use App\Models\Workout;
use Livewire\Component;

class ShowLatest extends Component
{
    protected $listeners = ['refreshList' => 'render'];

    public function render()
    {
        $latest = Workout::orderBy('date', 'desc')->simplePaginate(10);
        return view('livewire.show-latest')->with('latest', $latest);
    }
}
