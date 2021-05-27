<?php

namespace App\Observers;

use App\Models\Vacancy;

class VacancyObserver
{
    public function creating(Vacancy $vacancy)
    {
        if (!\App::runningInConsole()) {
            $vacancy->user_id = auth()->user()->id;
        }
    }

    public function deleted(Vacancy $vacancy)
    {
        //
    }
}
