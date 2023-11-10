<?php

namespace App\Http\Livewire\Topics;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Profesor;
use App\Models\Assignment;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $schedule = [];
    public $date_selected;
    public $id_course;
    public $error = '';

    public function mount()
    {
        $user = auth()->user();
        $id_profesor = Profesor::where('email', $user->email)->first();

        $this->schedule = Assignment::with('course')->where('id_catedratico', $id_profesor->id)->get();
    }

    public function dateValidate()
    {
        $selected_assignment = collect($this->schedule)->firstWhere('course.id', $this->id_course);

        if (!$selected_assignment) {
            $this->error = "Por favor selecciona un curso válido.";
            return;
        }

        $fecha = Carbon::createFromFormat('Y-m-d', $this->date_selected);
        $dia_semana_ing = $fecha->format('l'); // 'l' devuelve el día completo en inglés
        $dia_semana_esp = $this->traducirDiaEspanol($dia_semana_ing);

        if ($dia_semana_esp !== $selected_assignment->course->dia) {
            $this->error = "Por favor seleccionar un día que coincida con el curso para el dia ({$selected_assignment->course->dia}).";
        } else {
            $this->error = '';
        }
    }

    private function traducirDiaEspanol($diaIngles)
    {
        $dias = [
            'Monday' => 'Lunes',
            'Tuesday' => 'Martes',
            'Wednesday' => 'Miércoles',
            'Thursday' => 'Jueves',
            'Friday' => 'Viernes',
            'Saturday' => 'Sábado',
            'Sunday' => 'Domingo',
        ];

        return $dias[$diaIngles] ?? null;
    }

    public function render()
    {
        return view('livewire.topics.create', [
            'schedules' => $this->schedule
        ]);
    }
}
