<?php

//use Illuminate\Http\Request;
//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});
Route::apiResource('zonas' , 'api\ZonaController');


Route::apiResource('provincias' , 'api\ProvinciaController');
Route::apiResource('distritos' , 'api\DistritoController');
Route::apiResource('governo_provincials' , 'api\Governo_ProvincialController');
Route::apiResource('orgao_centrals' , 'api\Orgaos_CentraisController');



Route::apiResource('instituicoes_ensinos' , 'api\Instituicoes_EnsinoController');
Route::apiResource('instituicoes_financeiras' , 'api\Instituicoes_FinanceirasController');
Route::apiResource('instituicoes_tuteladas' , 'api\Instituicoes_TuteladasController');
Route::apiResource('contactos' , 'api\ContactoController');


