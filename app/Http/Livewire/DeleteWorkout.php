<?php

namespace App\Http\Livewire;

use App\Models\Workout;
use LivewireUI\Modal\ModalComponent;

class DeleteWorkout extends ModalComponent
{
    public $workout_id;

    public function destroy()
    {
        Workout::where('id', $this->workout_id)->delete();
        $this->emit('refreshList');
        $this->forceClose()->closeModal();
    }

    public function render()
    {
        return view('livewire.delete-workout');
    }
}
