<?php

namespace App\Http\Controllers\api;


use App\Modelos\OrgaoCentral;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Orgaos_CentraisController extends Controller
{

    public function index()
    {
        return OrgaoCentral::all();
    }

    public function store(Request $request)
    {
        OrgaoCentral::create($request->all());
    }


    public function show($id)
    {
        return OrgaoCentral::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $orgaos_centrais = OrgaoCentral::findOrFail($id);
        $orgaos_centrais->update($request->all());


    }


    public function destroy($id)
    {
       $orgaos_centrais = OrgaoCentral::findOrFail($id);
       $orgaos_centrais->delete();
    }
}
