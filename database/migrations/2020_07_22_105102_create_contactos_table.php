<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_distrito');
            $table->foreign('id_distrito')->references('id')->on('distritos')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedInteger('id_governo_provincial');
            $table->foreign('id_governo_provincial')->references('id')->on('governo_provincials')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedInteger('id_instituicao_ensino');
            $table->foreign('id_instituicao_ensino')->references('id')->on('instituicoes_ensinos')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedInteger('id_orgao_central');
            $table->foreign('id_orgao_central')->references('id')->on('orgao_centrals')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedInteger('id_instituicao_tutelada');
            $table->foreign('id_instituicao_tutelada')->references('id')->on('instituicoes_tuteladas')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedInteger('id_instituicao_finaceira');
            $table->foreign('id_instituicao_finaceira')->references('id')->on('instituicoes_financeiras')->onDelete('cascade')->onUpdate('cascade');


            $table->string('avenida');
            $table->string('numero');
            $table->string('site');
            $table->string('telefone1');
            $table->string('telefone2');
            $table->string('email');

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
        Schema::dropIfExists('contactos');
    }
}
