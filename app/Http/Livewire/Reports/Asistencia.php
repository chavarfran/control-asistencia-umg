<?php

namespace App\Http\Livewire\Reports;

use Livewire\Component;
use Barryvdh\DomPDF\Facade as PDF;

class Asistencia extends Component
{
    public function render()
    {
        $pdf = PDF::loadView('livewire.reports.asistencia')
        ->setPaper("letter", 'portrait')->stream('Reporte.pdf');
        
        return $pdf;
    }
}
