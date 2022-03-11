<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NuevosRegistros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nuevos_regiwstros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cp');
            $table->string('asentamiento');
            $table->string('tipo_asenta');
            $table->string('municipio');
            $table->string('estado');
            $table->string('ciudad');
            $table->timestamps();

            $table->foreign('cp')->references('codigo')->on('codigos_postales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
