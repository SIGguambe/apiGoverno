<?php

namespace App\Http\Controllers\api;


use App\Modelos\InstituicoesEnsino;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Instituicoes_EnsinoController extends Controller
{
/* Função responsavel por retornar todas Instituições de Ensino*/
    public function index()
    {
        return InstituicoesEnsino::all();
    }
/* Função Responsavel por Gravar/Persistir dados na Base de dados */
    public function store(Request $request)
    {
        InstituicoesEnsino::create($request->all());
    }

/* Função responsavel por Visualizar dados informando o Id */
    public function show($id)
    {
        return InstituicoesEnsino::findOrFail($id);
    }

 /* Função responsavel por Editar e actualizar Instituição */
    public function update(Request $request, $id)
    {
        $instituicao_Ensino = InstituicoesEnsino::findOrFail($id);
        $instituicao_Ensino->update($request->all());


    }

/* Função responsavel por Deletar um resgitro  */
    public function destroy($id)
    {
        $instituicao_Ensino= InstituicoesEnsino::findOrFail($id);
        $instituicao_Ensino->delete();
    }
}
