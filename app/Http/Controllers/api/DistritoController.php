<?php

namespace App\Http\Controllers\api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\Distrito;

class DistritoController extends Controller
{

    public function index()
    {
        return Distrito::all();
    }


    public function store(Request $request)
    {
       Distrito::create($request->all());
    }


    public function show($id)
    {
        return Distrito::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $distrito = Distrito::findOrFail($id);
        $distrito->update($request->all());
    }


    public function destroy($id)
    {
        $distrito = Distrito::findOrFail($id);
        $distrito->delete();
    }
}
