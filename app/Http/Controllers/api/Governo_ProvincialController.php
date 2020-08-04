<?php

namespace App\Http\Controllers\api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\GovernoProvincial;


class Governo_ProvincialController extends Controller
{
     /* Função responsavel por retornar  Governo Provincial */
    public function index()
    {
        return GovernoProvincial::all();
    }

    /* Função Responsavel por Gravar/Persistir dados na Base de dados */
    public function store(Request $request)
    {
        GovernoProvincial::create($request->all());
    }

/* Função responsavel por Visualizar dados informando o Id */
    public function show($id)
    {
        return GovernoProvincial::findOrFail($id);
    }

/* Função responsavel por Editar e actualizar Governo Provincial */
    public function update(Request $request, $id)
    {
        $governoProvincial=GovernoProvincial::findOrFail($id);
        $governoProvincial->update($request->all());
    }

/* Função responsavel por Deletar um resgitro  */
    public function destroy($id)
    {
        $governoProvincial= GovernoProvincial::findOrFail($id);
        $governoProvincial->delete();
    }
}
