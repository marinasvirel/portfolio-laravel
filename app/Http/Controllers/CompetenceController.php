<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompetenceUpdateRequest;
use App\Models\Competence;
use App\QueryBuilders\CompetenciesQueryBuilder;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CompetenciesQueryBuilder $competenciesQueryBuilder): View
    {
        $competencies = $competenciesQueryBuilder->getAll();
        return \view('profile.competence.index', ['competencies' => $competencies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompetenciesQueryBuilder $competenciesQueryBuilder): View
    {
      $competencies = $competenciesQueryBuilder->getAll();
      return \view('profile.competence.edit', ['competencies' => $competencies]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompetenceUpdateRequest $request, Competence $competence): RedirectResponse
    {

//      dd($request);
//      $com = $competence->fill($request->validated());
////     dd($com);
//      DB::table('competencies')->where('name', $com->name)
//        ->update(array('active' => $com->active));
//        return Redirect::route('competence.edit')->with('status', 'profile-updated');

        $req = $request->input();
        array_splice($req, 0,2);
        foreach ($req as $data => $value){
          DB::table('competencies')->where('name', $data)
            ->update(array('active'=> $value));
        }
        return Redirect::route('competence.edit')->with('status', 'profile-updated');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
