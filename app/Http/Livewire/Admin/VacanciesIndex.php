<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Vacancy;

use Livewire\WithPagination;

class VacanciesIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    //resetPage, permite que se me muestren los registros de todas las paginas, ya que sin esto, así exista un regitro, dirá que no lo hay.

    public function render()
    {
        $vacancies = Vacancy::where('user_id', auth()->user()->id)
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate();

        return view('livewire.admin.vacancies-index', compact('vacancies'));
    }
}
