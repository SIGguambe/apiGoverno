<?php

namespace App\Http\Controllers\api;


use App\Modelos\OrgaoCentral;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Orgaos_CentraisController extends Controller
{
/* Função responsavel por retornar todos Orgãos Centaris */
    public function index()
    {
        return OrgaoCentral::all();
    }
/* Função Responsavel por Gravar/Persistir dados na Base de dados */
    public function store(Request $request)
    {
        OrgaoCentral::create($request->all());
    }

/* Função responsavel por Visualizar dados informando o Id */
    public function show($id)
    {
        return OrgaoCentral::findOrFail($id);
    }

/* Função responsavel por Editar e actualizar Orgãos centaris */
    public function update(Request $request, $id)
    {
        $orgaos_centrais = OrgaoCentral::findOrFail($id);
        $orgaos_centrais->update($request->all());


    }

/* Função responsavel por Deletar um resgitro  */
    public function destroy($id)
    {
       $orgaos_centrais = OrgaoCentral::findOrFail($id);
       $orgaos_centrais->delete();
    }
}
