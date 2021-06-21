<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;

use Illuminate\Http\Request;

class PageController extends Controller

{
    public $search;

    public function home()
    {
        return view('index');
    }

    public function render()
    {
        $vacancies = Vacancy::where('user_id', auth()->user()->id)
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->orWhere('description', 'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate();

        return view('livewire.vacancy-list', compact('vacancies'));
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
