<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituicoesTuteladasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicoes_tuteladas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_orgao_central');
            $table->foreign('id_orgao_central')->references('id')->on('orgao_centrals')->onDelete('cascade')->onUpdate('cascade');
            $table->string('designacao');
            $table->string('responsavel');
            $table->string('adjunto');
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
        Schema::dropIfExists('instituicoes_tuteladas');
    }
}
