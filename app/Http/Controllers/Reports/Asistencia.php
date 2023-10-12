<?php

namespace App\Http\Controllers\Reports;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Asistencia extends Controller
{
    public function index()
    {
        $pdf = PDF::loadView('livewire.reports.asistencia')
            ->setPaper("letter", 'landscape')->stream('Reporte.pdf');
        
        return $pdf;
    }
}
