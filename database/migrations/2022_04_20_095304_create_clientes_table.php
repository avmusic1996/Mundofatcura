<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nit');
            $table->string('_token');
            $table->string('nombresapellidos');
            $table->string('razonsocial');
            $table->string('tipodocumento');
            $table->string('numerodocumento');
            $table->string('correoelectronico');
            $table->string('telefono');
            $table->string('celular');
            $table->string('pais');
            $table->string('departamento');
            $table->string('municipio');
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
        Schema::dropIfExists('clientes');
    }
}
