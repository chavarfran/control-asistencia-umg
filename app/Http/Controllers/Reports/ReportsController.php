<?php

namespace App\Http\Controllers\Reports;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function reportprofesor()
    {
        $pdf = PDF::loadView('livewire.reports.asistencia')
            ->setPaper("letter", 'landscape')->stream('Reporte.pdf');

        return $pdf;
    }
}
