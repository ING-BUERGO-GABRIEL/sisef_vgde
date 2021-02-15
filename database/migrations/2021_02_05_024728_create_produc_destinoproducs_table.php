<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducDestinoproducsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produc_destinoproducs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produccion'); // Relación con categorias
            $table->foreign('id_produccion')->references('id')->on('produccions');
            $table->unsignedBigInteger('id_destinoproduccion'); // Relación con categorias
            $table->foreign('id_destinoproduccion')->references('id')->on('destino_produccions');
            $table->string('porsentaje_destinado',3);
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
        Schema::dropIfExists('produc_destinoproducs');
    }
}
