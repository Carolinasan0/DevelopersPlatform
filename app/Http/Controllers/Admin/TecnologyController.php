<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tecnology;

class TecnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnologies = Tecnology::all();

        return view('admin.tecnologies.index', compact('tecnologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tecnologies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:tecnologies',
        ]);

        $tecnology = Tecnology::create($request->all());

        return redirect()->route('admin.tecnologies.edit', compact('tecnology'))->with('info', 'La tecnología se creó con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tecnology $tecnology)
    {
        return view('admin.tecnologies.show', compact('tecnology'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tecnology $tecnology)
    {
        return view('admin.tecnologies.edit', compact('tecnology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tecnology $tecnology)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tecnologies,slug,$tecnology->id",
        ]);

        $tecnology->update($request->all());

        return redirect()->route('admin.tecnologies.edit', $tecnology)->with('info', 'La tecnología se actualizó con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnology $tecnology)
    {
        $tecnology->delete();

        return redirect()->route('admin.tecnologies.index')->with('info', 'La tecnología se eliminó correctamente.');
    }
}
