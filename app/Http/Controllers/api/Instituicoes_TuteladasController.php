<?php

namespace App\Http\Controllers\api;


use App\Modelos\InstituicoesTutelada;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Instituicoes_TuteladasController extends Controller
{
/* Função responsavel por retornar todas Instituições Tuteladas*/
    public function index()
    {
        return InstituicoesTutelada::all();
    }
/* Função Responsavel por Gravar/Persistir dados na Base de dados */
    public function store(Request $request)
    {
        InstituicoesTutelada::create($request->all());
    }

/* Função responsavel por Visualizar dados informando o Id */
    public function show($id)
    {
        return InstituicoesTutelada::findOrFail($id);
    }

/* Função responsavel por Editar e actualizar Instituições de Tutela */
    public function update(Request $request, $id)
    {
        $instituicoes_tuteladas= InstituicoesTutelada::findOrFail($id);
        $instituicoes_tuteladas->update($request->all());


    }

/* Função responsavel por Deletar um resgitro  */
    public function destroy($id)
    {
        $instituicoes_tuteladas = InstituicoesTutelada::findOrFail($id);
        $instituicoes_tuteladas->delete();
    }
}
