<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distritos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_provincia');
            $table->foreign('id_provincia')->references('id')->on('provincias')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome')->unique();
            $table->boolean('isCapital');
            $table->integer('populacao_homens');
            $table->integer('populacao_mulheres');
            $table->integer('ano_censo');
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
        Schema::dropIfExists('distritos');
    }
}
