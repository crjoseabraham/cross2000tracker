<?php

namespace App\Http\Livewire;

use App\Models\Exercise;
use LivewireUI\Modal\ModalComponent;

class AddExercise extends ModalComponent
{
    public $name;

    public function save()
    {
        Exercise::create([
            'name' => $this->name
        ]);

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.add-exercise');
    }
}
