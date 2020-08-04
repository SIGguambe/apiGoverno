<?php

//use Illuminate\Http\Request;
//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});


/* Sistema de Cadastro. 
  depois de executar o sistena,
  1º, Faz Cadastro de Zonas
  2º, Cadastro  de Provincias
  3º, Cadastro de  Distrito
  4º, Cadatro de Orgãos Centaris ,
  5º, Cadastro de Governo Provincial
  6º, Cadatro de Cadatro de instituicões,
  7º, Cadastro de Contatos.
  */



Route::apiResource('zonas' , 'api\ZonaController'); /* Rota responsavel por Retornar Zonas Do País*/


Route::apiResource('provincias' , 'api\ProvinciaController'); /* Rota responsavel por Retornar Provincias Do País*/
Route::apiResource('distritos' , 'api\DistritoController');   /* Rota responsavel por Retornar Distritos Do País*/
Route::apiResource('orgao_centrals' , 'api\Orgaos_CentraisController'); /* Rota responsavel por Retornar Orgãos Centarais*/
Route::apiResource('governo_provincials' , 'api\Governo_ProvincialController');  /* Rota responsavel por Retornar Governo Proncial */




Route::apiResource('instituicoes_ensinos' , 'api\Instituicoes_EnsinoController'); /* Rota responsavel por Retornar Instituições do Ensino*/
Route::apiResource('instituicoes_financeiras' , 'api\Instituicoes_FinanceirasController'); /* Rota responsavel por Retornar Instituições Financeiras*/
Route::apiResource('instituicoes_tuteladas' , 'api\Instituicoes_TuteladasController'); /* Rota responsavel por Retornar Instituições de Tutelas*/
Route::apiResource('contactos' , 'api\ContactoController'); /* Rota responsavel por Retornar Contanctos de cada Instituicão, Governo Pronvincial, Orgão Centrais e Governo distrital*/


