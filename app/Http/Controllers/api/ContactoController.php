<?php

namespace App\Http\Controllers\api;

use App\Modelos\Contacto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactoController extends Controller
{

    public function index()
    {
        return Contacto::all();
    }

    public function store(Request $request)
    {
        Contacto::create($request->all());
    }


    public function show($id)
    {
        return Contacto::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $contacto= Contacto::findOrFail($id);
        $contacto->update($request->all());


    }


    public function destroy($id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();
    }
}
