<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    //Este se conecta con user-index.blade.php
    public $search;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        //esto me sirve para filtrar el registro de los usuarios
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
            ->orwhere('email', 'LIKE', '%' . $this->search . '%')
            ->paginate();
        //% me ayudará a que a medida que se escriba en el buscador me arroje los resultados de acuerdo a lo que vaya escribiendo.
        return view('livewire.admin.users-index', compact('users'));
    }
}
