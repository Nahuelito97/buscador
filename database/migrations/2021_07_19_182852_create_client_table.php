<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('client', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('nombre');
           $table->string('apellido');
           $table->string('direccion');
           $table->string('fechanacimiento');
           $table->string('telefono');
           $table->string('correoelectronico')->unique();
           $table->boolean('borrado')->default(0);
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
