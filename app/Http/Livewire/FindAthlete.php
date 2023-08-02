<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class FindAthlete extends ModalComponent
{
    public $athlete_id;
    protected $listeners = ['foundAthlete'];


    public function foundAthlete($athlete)
    {
        $this->athlete_id = $athlete["id"];

        return redirect('/athlete/' . $this->athlete_id);
    }

    public function render()
    {
        return view('livewire.find-athlete');
    }
}
