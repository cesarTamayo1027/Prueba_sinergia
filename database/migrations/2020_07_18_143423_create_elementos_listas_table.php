<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementosListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elementos_listas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable(false);
            $table->unsignedBigInteger('elemento_lista_id')->nullable();
            $table->foreign('elemento_lista_id')->references('id')->on('elementos_listas');
            $table->unsignedBigInteger('tipo_lista_id')->nullable(false);
            $table->foreign('tipo_lista_id')->references('id')->on('tipos_listas');
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
        Schema::dropIfExists('elementos_listas');
    }
}
