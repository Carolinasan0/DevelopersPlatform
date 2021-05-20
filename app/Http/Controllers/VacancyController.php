<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function vacancy(Vacancy $vacancy)
    {
        return view('vacancy', compact('vacancy'));
    }

    // public function create()
    // {
    //     return "Aquí se pude crear una vacante";
    // }
}
