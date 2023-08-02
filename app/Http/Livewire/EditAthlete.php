<?php

namespace App\Http\Livewire;

use App\Models\Athlete;
use LivewireUI\Modal\ModalComponent;

class EditAthlete extends ModalComponent
{
    public $athlete_id;
    public $name;
    public $gender;
    public $dob;

    public function mount($athlete)
    {
        $this->athlete_id = $athlete['id'];
        $this->name = $athlete['name'];
        $this->gender = $athlete['gender'];
        $this->dob = $athlete['dob'];
    }

    public function save()
    {
        $athlete = Athlete::find($this->athlete_id);
        $athlete->name = $this->name;
        $athlete->gender = $this->gender;
        $athlete->dob = $this->dob;
        $athlete->save();
        $this->emit('refreshList');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.edit-athlete');
    }
}
