<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Zona;

class ZonaController extends Controller
{


    public function index()
    {
       return Zona::all();
    }

    public function store(Request $request)
    {
        Zona::create($request->all());
    }


    public function show($id)
    {
        return Zona::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $zona= Zona::findOrFail($id);
        $zona->update($request->all());


    }


    public function destroy($id)
    {
        $zona= Zona::findOrFail($id);
        $zona->delete();
    }
}
