<?php

namespace App\Http\Livewire\Career;

use Livewire\Component;
use App\Models\Faculty;

class Create extends Component
{
    public $faculties=[]; 
    
    public function mount()
    {
        $this->faculties = Faculty::all();
    }

    public function render()
    {
        return view('livewire.career.create', [
           'faculties' => $this->faculties,
        ]);
    }
}
