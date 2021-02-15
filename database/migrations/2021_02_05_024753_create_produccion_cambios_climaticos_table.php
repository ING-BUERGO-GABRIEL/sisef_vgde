<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduccionCambiosClimaticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccion_cambios_climaticos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produccion'); // Relación con categorias
            $table->foreign('id_produccion')->references('id')->on('produccions');
            $table->unsignedBigInteger('id_cambiosclimaticos'); // Relación con categorias
            $table->foreign('id_cambiosclimaticos')->references('id')->on('fenomeno_climas');
            $table->date('fecha');
            $table->boolean('estado')->default(1);
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
        Schema::dropIfExists('produccion_cambios_climaticos');
    }
}
