<?php

namespace App\Http\Controllers\api;

use App\Modelos\Provincia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProvinciaController extends Controller
{

/* Função responsavel por retornar todas Pronvincias */
    public function index()
    {
        return Provincia::all();
    }
/* Função Responsavel por Gravar/Persistir dados na Base de dados */
    public function store(Request $request)
    {
         Provincia::create($request->all());
    }

/* Função responsavel por Visualizar dados informando o Id */
    public function show($id)
    {
        return Provincia::findOrFail($id);
    }

/* Função responsavel por Editar e actualizar Provincias */
    public function update(Request $request, $id)
    {
        $provincia= Provincia::findOrFail($id);
        $provincia->update($request->all());
    }

/* Função responsavel por Deletar um resgitro  */
    public function destroy($id)
    {
        $provincia= Provincia::findOrFail($id);
        $provincia->delete();
    }
}
