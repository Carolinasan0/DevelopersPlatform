<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(Category $category)
    {
        // return view('category.category', compact('category'));
        return view('category.category');
    }

    //     public function create()
    //     {
    //         return view('category.create');
    //     }

    //     public function show()
    //     {
    //         return view('category.show');
    //     }
}
