<?php

namespace App\Http\Controllers\api;


use App\Modelos\InstituicoesEnsino;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Instituicoes_EnsinoController extends Controller
{

    public function index()
    {
        return InstituicoesEnsino::all();
    }

    public function store(Request $request)
    {
        InstituicoesEnsino::create($request->all());
    }


    public function show($id)
    {
        return InstituicoesEnsino::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $instituicao_Ensino = InstituicoesEnsino::findOrFail($id);
        $instituicao_Ensino->update($request->all());


    }


    public function destroy($id)
    {
        $instituicao_Ensino= InstituicoesEnsino::findOrFail($id);
        $instituicao_Ensino->delete();
    }
}
