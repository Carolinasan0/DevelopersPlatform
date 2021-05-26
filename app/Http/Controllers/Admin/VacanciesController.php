<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Category;
use App\Models\Tecnology;
use App\Models\Skill;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Salary;
use App\Models\Experience;

use App\Http\Requests\StoreVacancyRequest;


class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.vacancies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $countries = Country::pluck('long_description', 'id');
        $wages = Salary::pluck('salary', 'id');
        $currencies = Currency::pluck('currency', 'id');
        $experiences = Experience::pluck('experience', 'id');
        $tecnologies = Tecnology::all();
        $skills = Skill::all();

        // pluck me genera un array que solo tomará el valor name de cada objeto (categorías)
        // return view('admin.vacancies.create', compact('categories', 'countries', 'currencies', 'tecnologies', 'skills',));
        return view('admin.vacancies.create', compact('categories', 'countries',  'wages', 'currencies', 'tecnologies', 'experiences', 'skills',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVacancyRequest $request)
    //aquí envio la info a la BD
    {
        $vacancy = Vacancy::create($request->all());

        if ($request->tecnologies) {
            $vacancy->tecnologies()->attach($request->tecnologies);
        }

        return redirect()->route('admin.vacancies.edit', $vacancy);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy)
    {
        return view('admin.vacancies.show', compact('vacancy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacancy $vacancy)
    {
        return view('admin.vacancies.edit', compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $vacancy)
    {
        //
    }
}
