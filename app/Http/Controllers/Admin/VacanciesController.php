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

use App\Http\Requests\VacancyRequest;


class VacanciesController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.vacancies.index')->only('index');
        $this->middleware('can:admin.vacancies.create')->only('create', 'store');
        $this->middleware('can:admin.vacancies.edit')->only('edit', 'update');
        $this->middleware('can:admin.vacancies.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.vacancies.index');
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $countries = Country::pluck('long_description', 'id');
        $wages = Salary::pluck('salary', 'id');
        $currencies = Currency::pluck('currency', 'id');
        $experiences = Experience::pluck('experience', 'id');
        $tecnologies = Tecnology::all();
        // $skills = Skill::all();

        // pluck me genera un array que solo tomará el valor name de cada objeto (categorías)
        // return view('admin.vacancies.create', compact('categories', 'countries', 'currencies', 'tecnologies', 'skills',));
        return view('admin.vacancies.create', compact('categories', 'countries',  'wages', 'currencies', 'tecnologies', 'experiences'));
    }

    public function store(VacancyRequest $request)
    //aquí envio la info a la BD
    {
        $vacancy = Vacancy::create($request->all());

        if ($request->tecnologies) {
            $vacancy->tecnologies()->attach($request->tecnologies);
        }

        //el método attach me actualiza los campos de la tabla intermedia de vacante y tecno, trayendo los id de ambas tablas

        return redirect()->route('admin.vacancies.index', $vacancy)->with('info', 'La vacante se creó con éxito.');
    }

    public function show(Vacancy $vacancy)
    {
        // return view('admin.vacancies.show', compact('vacancy'));
        return redirect()->route('vacancy', $vacancy->id);
    }

    public function edit(Vacancy $vacancy)
    {

        $this->authorize('author', $vacancy);

        $categories = Category::pluck('name', 'id');
        $countries = Country::pluck('long_description', 'id');
        $wages = Salary::pluck('salary', 'id');
        $currencies = Currency::pluck('currency', 'id');
        $experiences = Experience::pluck('experience', 'id');
        $tecnologies = Tecnology::all();
        // $skills = Skill::all();

        return view('admin.vacancies.edit', compact('vacancy', 'categories', 'countries', 'wages', 'currencies', 'tecnologies', 'experiences'));
    }

    public function update(VacancyRequest $request, Vacancy $vacancy)
    {
        $this->authorize('author', $vacancy);

        $vacancy->update($request->all());

        if ($request->tecnologies) {
            $vacancy->tecnologies()->sync($request->tecnologies);
        }
        // el método sync en cambio de attach, este sincroniza la coleccion qe le mandamos con los rrefistros que existan actulamente
        return redirect()->route('admin.vacancies.edit', $vacancy)->with('info', 'La vacante se actualizó con éxito.');
    }

    public function destroy(Vacancy $vacancy)
    {
        $this->authorize('author', $vacancy);

        $vacancy->delete();

        return redirect()->route('admin.vacancies.index', $vacancy)->with('info', 'La vacante se eliminó exitosamente.');
    }
}
