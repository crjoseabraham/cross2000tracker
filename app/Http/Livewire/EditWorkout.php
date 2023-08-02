<?php

namespace App\Http\Livewire;

use App\Models\Workout;
use LivewireUI\Modal\ModalComponent;

class EditWorkout extends ModalComponent
{
    public $workout_id, $date, $wod1, $wod2, $wod3, $wod4, $workout;

    public function mount()
    {
        $workout = Workout::find($this->workout_id);
        $this->date = $workout->date;
        $this->wod1 = $workout->wod1;
        $this->wod2 = $workout->wod2;
        $this->wod3 = $workout->wod3;
        $this->wod4 = $workout->wod4;
        $this->workout = $workout;
    }

    public function save()
    {
        $workout = Workout::find($this->workout_id);
        $workout->date = $this->date;
        $workout->wod1 = $this->wod1;
        $workout->wod2 = $this->wod2;
        $workout->wod3 = $this->wod3;
        $workout->wod4 = $this->wod4;
        $workout->total = ($this->wod1 + $this->wod2 + $this->wod3 + $this->wod4);
        $workout->save();
        $this->emit('refreshList');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.edit-workout')->with('workout_id', $this->workout_id);
    }
}
