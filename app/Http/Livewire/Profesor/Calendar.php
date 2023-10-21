<?php

namespace App\Http\Livewire\Profesor;

use Livewire\Component;
use Carbon\Carbon;

class Calendar extends Component
{
    public $currentMonth;
    public $currentYear;
    

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
    }

    public function render()
    {
        $startOfWeek = Carbon::create($this->currentYear, $this->currentMonth, 1);
        $endOfWeek = (clone $startOfWeek)->endOfMonth();

        $days = [];

        while ($startOfWeek->lte($endOfWeek)) {
            $days[] = clone $startOfWeek;
            $startOfWeek->addDay();
        }

        return view('livewire.profesor.calendar', compact('days'));
    }
}
