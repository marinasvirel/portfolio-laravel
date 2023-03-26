<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompetenceUpdateRequest;
use App\QueryBuilders\CompetenciesQueryBuilder;
use Illuminate\Contracts\View\View;
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
     * Update the specified resource in storage.
     */
    public function update(CompetenceUpdateRequest $request): RedirectResponse
    {
        $req = $request->input();
        array_splice($req, 0,2);
        foreach ($req as $data => $value){
          DB::table('competencies')->where('class', $data)
            ->update(array('active'=> $value));
        }
        return Redirect::route('competence.index')->with('status', 'profile-updated');

    }

}
