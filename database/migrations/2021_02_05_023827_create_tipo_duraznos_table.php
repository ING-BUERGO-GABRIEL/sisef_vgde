<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoDuraznosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_duraznos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_comun',30); 
            $table->string('nombre_cientifico',30); 
            $table->string('descripcion',600); 
            $table->string('foto');
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
        Schema::dropIfExists('tipo_duraznos');
    }
}
