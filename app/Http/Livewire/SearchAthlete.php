<?php

namespace App\Http\Livewire;

use App\Models\Athlete;
use Livewire\Component;

class SearchAthlete extends Component
{
    public $showdiv = false;
    public $search = "";
    public $records, $athDetails, $athlete_id;

    public function searchResult()
    {
        if (!empty($this->search)) {

            $this->records = Athlete::orderby('name', 'asc')
                ->select('*')
                ->where('name', 'like', '%' . $this->search . '%')
                ->limit(5)
                ->get();

            $this->showdiv = true;
        } else {
            $this->showdiv = false;
        }
    }

    // Fetch record by ID
    public function fetchAthleteDetail($id = 0)
    {

        $record = Athlete::select('*')
            ->where('id', $id)
            ->first();

        $this->search = $record->name;
        $this->athlete_id = $record->id;
        $this->athDetails = (object) $record;
        $this->showdiv = false;

        $this->emit('foundAthlete', $record);
    }

    public function render()
    {
        return view('livewire.search-athlete');
    }
}
