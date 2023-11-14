<?php

namespace App\Http\Livewire\Profesor;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Profesor;

class Calendar extends Component
{
    public $currentMonth;
    public $currentYear;

    public $course = [];

    public function goToPreviousMonth()
    {
        $date = Carbon::create($this->currentYear, $this->currentMonth, 1);
        $date->subMonth();

        $this->currentMonth = $date->month;
        $this->currentYear = $date->year;
    }

    public function goToNextMonth()
    {
        $date = Carbon::create($this->currentYear, $this->currentMonth, 1);
        $date->addMonth();

        $this->currentMonth = $date->month;
        $this->currentYear = $date->year;
    }

    public function mount()
    {
        Carbon::setLocale('es');
        $this->currentMonth = Carbon::now()->month;
        $this->currentYear = Carbon::now()->year;

        $user = auth()->user();
        $id_profesor = Profesor::where('email', $user->email)->first();

        $profesor = Profesor::with('assignments.course')->find($id_profesor->id);

        if ($profesor) {
            foreach ($profesor->assignments as $assignment) {
                $dia_curso = $assignment->course->dia; // Asegúrate de que 'dia' es un campo en tu modelo Course
                $nombre_curso = $assignment->course->nombre_curso;

                $this->course[$dia_curso][] = $nombre_curso;
            }
        }
    }

    public function render()
    {
        //dd($this->course);
        $startOfWeek = Carbon::create($this->currentYear, $this->currentMonth, 1);
        $endOfWeek = (clone $startOfWeek)->endOfMonth();

        $days = [];
        $curso_dia = $this->course;
        while ($startOfWeek->lte($endOfWeek)) {
            $days[] = clone $startOfWeek;
            $startOfWeek->addDay();
        }

        return view('livewire.profesor.calendar', compact('days', 'curso_dia'));
    }
}
