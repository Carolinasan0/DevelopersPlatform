<?php

namespace App\Http\Controllers;

use App\Models\Category;
// use App\Models\Vacancy;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Category $category)
    {
        // return view('category.category', compact('category'));
        return view('category.category');
    }

    // public function show(Vacancy $vacancy)
    // {   
    //     $similares = Vacancy::where('category_id', $vacancy->category_id)
    //                             ->where('status', 'Publicado')
    //                             ->latest('id')
    //                             // ->all()
    //                             ->get();
    //     return view('vacancy.show', compact('vacancy', 'similares'));
    // }

    //     public function create()
    //     {
    //         return view('category.create');
    //     }

   
}
