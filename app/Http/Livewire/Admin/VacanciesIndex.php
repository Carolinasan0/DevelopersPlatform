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

    public function render()
    {
        $vacancies = Vacancy::where('user_id', auth()->user()->id)
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate();

        return view('livewire.admin.vacancies-index', compact('vacancies'));
    }
}
