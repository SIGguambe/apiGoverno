<?php

namespace App\Http\Controllers\api;


use App\Modelos\InstituicoesTutelada;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Instituicoes_TuteladasController extends Controller
{

    public function index()
    {
        return InstituicoesTutelada::all();
    }

    public function store(Request $request)
    {
        InstituicoesTutelada::create($request->all());
    }


    public function show($id)
    {
        return InstituicoesTutelada::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $instituicoes_tuteladas= InstituicoesTutelada::findOrFail($id);
        $instituicoes_tuteladas->update($request->all());


    }


    public function destroy($id)
    {
        $instituicoes_tuteladas = InstituicoesTutelada::findOrFail($id);
        $instituicoes_tuteladas->delete();
    }
}
