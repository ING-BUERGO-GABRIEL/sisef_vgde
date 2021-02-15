<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_plantacion'); // Relación con categorias
            $table->foreign('id_plantacion')->references('id')->on('plantacions');  
            $table->unsignedBigInteger('id_tipo_durazno'); // Relación con categorias
            $table->foreign('id_tipo_durazno')->references('id')->on('tipo_duraznos');    
            $table->unsignedBigInteger('id_usuario'); // Relación con categorias
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->unsignedBigInteger('id_encuestador'); // Relación con categorias
            $table->foreign('id_encuestador')->references('id')->on('encuestadors'); 
            $table->decimal('preciocaja_bs',8, 2);
            $table->date('fechaproduccion');
            $table->integer('cantidadcajas');
            $table->decimal('costoproduccion',8,2);
            $table->decimal('diametropromedio',8,2);
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
        Schema::dropIfExists('produccions');
    }
}
