<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituicoesFinanceirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicoes_financeiras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_orgao_central');
            $table->foreign('id_orgao_central')->references('id')->on('orgao_centrals')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nomePresidente');
            $table->string('designacao');
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
        Schema::dropIfExists('instituicoes_financeiras');
    }
}
