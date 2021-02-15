<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_lugar'); // Relación con categorias
            $table->foreign('id_lugar')->references('id')->on('lugar_plantacions');
            $table->unsignedBigInteger('id_proveedor'); // Relación con categorias
            $table->foreign('id_proveedor')->references('id')->on('proveedors');
            $table->unsignedBigInteger('id_sis_prevencion'); // Relación con categorias
            $table->foreign('id_sis_prevencion')->references('id')->on('sis_prevencion_climas');
            $table->unsignedBigInteger('id_productor'); // Relación con categorias
            $table->foreign('id_productor')->references('id')->on('productors');   
            $table->string('tiporiego',30);
            $table->string('tipoabono',30);
            $table->integer('cantidadplantine_ha');
            $table->integer('extencion_ha');
            $table->date('fechaplantacion');
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
        Schema::dropIfExists('plantacions');
    }
}
