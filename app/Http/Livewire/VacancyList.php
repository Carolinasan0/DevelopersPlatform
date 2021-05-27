<?php

namespace App\Http\Livewire;

use App\Models\Vacancy;
use Livewire\Component;

class VacancyList extends Component
{
    public function render()
    {
        return view('livewire.vacancy-list', [
            'vacancies' => Vacancy::where('status', 'Publicar')
                ->with('user')
                ->latest('id')
                ->take(3)
                ->get()
        ]);
    }
}
