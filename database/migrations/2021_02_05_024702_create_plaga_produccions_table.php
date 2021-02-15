<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlagaProduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plaga_produccions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_plaga'); // Relación con categorias
            $table->foreign('id_plaga')->references('id')->on('plagas');
            $table->unsignedBigInteger('id_produccion'); // Relación con categorias
            $table->foreign('id_produccion')->references('id')->on('produccions');
            $table->string('obserbaciones',500);
            $table->integer('superficieafectada_ha');
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
        Schema::dropIfExists('plaga_produccions');
    }
}
