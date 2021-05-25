<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use App\Models\Category;


use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function vacancy(Vacancy $vacancy)
    {
        return view('vacancy', compact('vacancy'));
    }

    public function category(Category $category)
    {
        $vacancy = Vacancy::where('category_id', $category->id)
            ->where('status', 'Publicar')
            ->latest('id')
            ->paginate(6);
        return view('vacancies.category', compact('vacancy', 'category'));
    }

    // public function create()
    // {
    //     return "Aquí se pude crear una vacante";
    // }
}
