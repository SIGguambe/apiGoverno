<?php

namespace App\Http\Controllers\api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Distrito;

class DistritoController extends Controller
{
/* Função responsavel por retornar todos Distrito */
    public function index()
    {
        return Distrito::all();
    }

/* Função Responsavel por Gravar/Persistir dados na Base de dados */
    public function store(Request $request)
    {
       Distrito::create($request->all());
    }

 /* Função responsavel por Visualizar dados informando o Id */
    public function show($id)
    {
        return Distrito::findOrFail($id);
    }

/* Função responsavel por Editar e actualizar Distritos */
    public function update(Request $request, $id)
    {
        $distrito = Distrito::findOrFail($id);
        $distrito->update($request->all());
    }

/* Função responsavel por Deletar um resgitro  */
    public function destroy($id)
    {
        $distrito = Distrito::findOrFail($id);
        $distrito->delete();
    }
}
