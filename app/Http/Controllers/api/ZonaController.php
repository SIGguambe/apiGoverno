<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Zona;

class ZonaController extends Controller
{

/* Função responsavel por retornar todos Zonas */
    public function index()
    {
       return Zona::all();
    }
   /* Função Responsavel por Gravar/Persistir dados na Base de dados */
    public function store(Request $request)
    {
        Zona::create($request->all());
    }

/* Função responsavel por Visualizar dados informando o Id */
    public function show($id)
    {
        return Zona::findOrFail($id);
    }

/* Função responsavel por Editar e actualizar Zonas */
    public function update(Request $request, $id)
    {
        $zona= Zona::findOrFail($id);
        $zona->update($request->all());


    }

/* Função responsavel por Deletar um resgitro  */
    public function destroy($id)
    {
        $zona= Zona::findOrFail($id);
        $zona->delete();
    }
}
