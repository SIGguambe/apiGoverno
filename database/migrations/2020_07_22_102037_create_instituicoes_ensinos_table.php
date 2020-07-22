<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituicoesEnsinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicoes_ensinos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_orgao_central');
            $table->foreign('id_orgao_central')->references('id')->on('orgao_centrals')->onDelete('cascade')->onUpdate('cascade');
            $table->string('designacao');
            $table->string('responsavel');
            $table->string('designacaoResponsavel');
            $table->string('nomeAdjunto');
            $table->string('designacaoAdjunto');
            $table->boolean('isPublica');
            $table->string('nivel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituicoes_ensinos');
    }
}
