<?php

namespace App\Http\Controllers\api;

use App\Modelos\Contacto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactoController extends Controller
{
 /* Função responsavel por retornar todos contactos */
    public function index()
    {
        return Contacto::all();
    }
/* Função Responsavel por Gravar/Persistir dados na Base de dados */
    public function store(Request $request)
    {
        Contacto::create($request->all());
    }

 /* Função responsavel por Visualizar dados informando o Id */
    public function show($id)
    {
        return Contacto::findOrFail($id);
    }

 /* Função responsavel por Editar e actualizar contactos */
    public function update(Request $request, $id)
    {
        $contacto= Contacto::findOrFail($id);
        $contacto->update($request->all());


    }

 /* Função responsavel por Deletar um resgitro  */
    public function destroy($id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();
    }
}
