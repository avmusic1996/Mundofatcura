<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombrepro');
            $table->string('descripcion');
            $table->string('categoria_id');
            $table->string('imagenuna');
            $table->string('folder');
            $table->string('stockpro');
            $table->string('marcapro');
            $table->string('codigopro');
            $table->string('modelopro');
            $table->string('codigoprosku');
            // $table->string('txtdescripcion');
            $table->string('valorunidad');
            $table->string('iva');
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
        Schema::dropIfExists('productos');
    }
}
