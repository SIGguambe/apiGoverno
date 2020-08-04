<?php

namespace App\Http\Controllers\api;


use App\Modelos\InstituicoesFinanceira;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Instituicoes_FinanceirasController extends Controller
{
/* Função responsavel por retornar todas Instituições Financeiras*/
    public function index()
    {
        return InstituicoesFinanceira::all();
    }
/* Função Responsavel por Gravar/Persistir dados na Base de dados */
    public function store(Request $request)
    {
        InstituicoesFinanceira::create($request->all());
    }

/* Função responsavel por Visualizar dados informando o Id */
    public function show($id)
    {
        return InstituicoesFinanceira::findOrFail($id);
    }

/* Função responsavel por Editar e actualizar Instituições Financeiras */
    public function update(Request $request, $id)
    {
        $instituicoes_financeiras = InstituicoesFinanceira::findOrFail($id);
        $instituicoes_financeiras->update($request->all());


    }

/* Função responsavel por Deletar um resgitro  */
    public function destroy($id)
    {
        $instituicoes_financeiras= InstituicoesFinanceira::findOrFail($id);
        $instituicoes_financeiras->delete();
    }
}
