<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerceroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tercero', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tipo_identificacion_id')->nullable(false);
            $table->foreign('tipo_identificacion_id')->references('id')->on('elementos_listas');
            $table->unsignedBigInteger('numero_identificacion')->nullable(false);
            $table->unsignedBigInteger('tipo_tercero_id')->nullable(false);
            $table->foreign('tipo_tercero_id')->references('id')->on('elementos_listas');
            $table->string('nombre1',50)->nullable(false);
            $table->string('nombre2',50)->nullable(false);
            $table->string('apellido1',50)->nullable(false);
            $table->string('apellido2',50)->nullable(false);
            $table->unsignedBigInteger('departamento_id')->nullable(false);
            $table->foreign('departamento_id')->references('id')->on('elementos_listas');
            $table->unsignedBigInteger('idmunicipio_id')->nullable(false);
            $table->foreign('idmunicipio_id')->references('id')->on('elementos_listas');
            $table->unsignedBigInteger('tipo_contribuyente_id')->nullable(false);
            $table->foreign('tipo_contribuyente_id')->references('id')->on('elementos_listas');
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
        Schema::dropIfExists('tercero');
    }
}
