<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Course;
use App\Models\Profesor;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {
        $total_catedraticos = Profesor::count();
        $total_usuarios = User::count();
        $total_cursos = Course::count();
        return view('livewire.dashboard',[
            "total_catedraticos" => $total_catedraticos,
            "total_usuarios" => $total_usuarios,
            "total_cursos" => $total_cursos,
        ]);
    }
}
