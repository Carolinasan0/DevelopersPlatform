<?php

namespace App\Policies;

use App\Models\Vacancy;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class VacancyPolicy
{
    use HandlesAuthorization;

    public function author(User $user, Vacancy $vacancy)
    {
        if ($user->id == $vacancy->user_id) {
            return true;
        } else {
            return false;
        }
    }

    public function published(?User $user, Vacancy $vacancy)
    {
        if ($vacancy->status == 'Publicar') {
            return true;
        } else {
            return false;
        }
    }
    //? el signo de ? permite que vea la vacante sin haber iniciado sesión, ya que los policies exigen que el usuario esté autentificado.
}
