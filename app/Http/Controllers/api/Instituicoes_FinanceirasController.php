<?php

namespace App\Http\Controllers\api;


use App\Modelos\InstituicoesFinanceira;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Instituicoes_FinanceirasController extends Controller
{
    public function index()
    {
        return InstituicoesFinanceira::all();
    }

    public function store(Request $request)
    {
        InstituicoesFinanceira::create($request->all());
    }


    public function show($id)
    {
        return InstituicoesFinanceira::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $instituicoes_financeiras = InstituicoesFinanceira::findOrFail($id);
        $instituicoes_financeiras->update($request->all());


    }


    public function destroy($id)
    {
        $instituicoes_financeiras= InstituicoesFinanceira::findOrFail($id);
        $instituicoes_financeiras->delete();
    }
}
