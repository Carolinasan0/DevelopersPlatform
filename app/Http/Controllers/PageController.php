<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }



    // public function render(Category $category)
    // {
    //     $categories = Category::all();
    //     // return view('footer', compact('categories'));
    //     return view('category.category');
    // }

    // public function category(Category $category) {
    //     // return view('vacancy', compact('vacancy'));
    //     return view('category', compact('category'));
    // }
}
