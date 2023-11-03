<?php

namespace App\Http\Livewire\Profesor;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Table extends Component
{
    public $profesor;

    public function mount()
    {
        $this->profesor = DB::table('tb_profesor')->get();
    }

    public function render()
    {
        return view('livewire.profesor.table', [
            'profesors' => $this->profesor
        ]);
    }
}
