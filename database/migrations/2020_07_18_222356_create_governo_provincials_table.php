<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovernoProvincialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('governo_provincials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_provincia');
            $table->foreign('id_provincia')->references('id')->on('provincias')->onDelete('cascade')->onUpdate('cascade');
            $table->string('secretario_estado')->unique();
            $table->string('governador')->unique();
            $table->string('secretario_permanente');
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
        Schema::dropIfExists('governo_provincials');
    }
}
