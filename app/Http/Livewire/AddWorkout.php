<?php

namespace App\Http\Livewire;

use App\Models\Workout;
use LivewireUI\Modal\ModalComponent;

class AddWorkout extends ModalComponent
{
    public $athlete_id;
    public $wod1 = 25, $wod2 = 25, $wod3 = 25, $wod4 = 25;
    public $date, $total, $shouldCloseModal = true;
    protected $listeners = ['foundAthlete'];

    public function save()
    {
        $this->total = $this->wod1 + $this->wod2 + $this->wod3 + $this->wod4;

        Workout::create([
            'date' => $this->date,
            'athlete_id' => $this->athlete_id,
            'wod1' => $this->wod1,
            'wod2' => $this->wod2,
            'wod3' => $this->wod3,
            'wod4' => $this->wod4,
            'total' => $this->total
        ]);

        $this->emit('refreshList');

        if ($this->shouldCloseModal)
            $this->closeModal();
    }

    public function foundAthlete($athlete)
    {
        $this->athlete_id = $athlete["id"];
    }

    public function render()
    {
        return view('livewire.add-workout');
    }
}
