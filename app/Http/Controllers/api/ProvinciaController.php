<?php

namespace App\Http\Controllers\api;

use App\Modelos\Provincia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProvinciaController extends Controller
{


    public function index()
    {
        return Provincia::all();
    }

    public function store(Request $request)
    {
         Provincia::create($request->all());
    }


    public function show($id)
    {
        return Provincia::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $provincia= Provincia::findOrFail($id);
        $provincia->update($request->all());
    }


    public function destroy($id)
    {
        $provincia= Provincia::findOrFail($id);
        $provincia->delete();
    }
}
