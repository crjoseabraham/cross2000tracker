<?php

namespace App\Http\Livewire;

use App\Models\Athlete;
use LivewireUI\Modal\ModalComponent;

class AddAthlete extends ModalComponent
{
    public $name, $gender = "Masculino", $dob;

    public function save()
    {
        Athlete::create([
            'name' => $this->name,
            'gender' => $this->gender,
            'dob' => $this->dob
        ]);

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.add-athlete');
    }
}
