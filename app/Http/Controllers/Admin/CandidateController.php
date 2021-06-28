<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

use Livewire\WithPagination;

class CandidateController extends Controller
{

    use WithPagination;

    public function index()
    {

        $candidate = Candidate::paginate();
        return view('admin.candidates.index', compact('candidate'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
