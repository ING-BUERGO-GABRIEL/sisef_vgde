<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestadors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',15);
            $table->string('apellidos',20);
            $table->string('direccion',100);
            $table->string('profesion',30);
            $table->string('telefono',15);
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
        Schema::dropIfExists('encuestadors');
    }
}
