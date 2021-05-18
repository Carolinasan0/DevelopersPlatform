<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('index');
    }

    public function vacancy(Vacancy $vacancy) {
        return view('vacancy', compact('vacancy'));
    }
}
