<?php

namespace App\Http\Controllers\api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelos\GovernoProvincial;


class Governo_ProvincialController extends Controller
{
    public function index()
    {
        return GovernoProvincial::all();
    }

    public function store(Request $request)
    {
        GovernoProvincial::create($request->all());
    }


    public function show($id)
    {
        return GovernoProvincial::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $governoProvincial=GovernoProvincial::findOrFail($id);
        $governoProvincial->update($request->all());
    }


    public function destroy($id)
    {
        $governoProvincial= GovernoProvincial::findOrFail($id);
        $governoProvincial->delete();
    }
}
