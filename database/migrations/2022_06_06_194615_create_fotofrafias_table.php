<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotofrafiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotofrafias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('id_especie');
            $table->string('imagen');
            $table->string('descripcion', 200);
            $table->integer('valor')->unsigned();
            $table->integer('calificacion')->unsigned();
            $table->string('comentario', 100);
            $table->timestamps();
            $table->foreign('id_admin')->references('id')->on('usuarios');
            $table->foreign('id_especie')->references('id')->on('especies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotofrafias');
    }
}
