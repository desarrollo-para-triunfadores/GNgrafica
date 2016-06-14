<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('color');
            $table->string('alto');
            $table->string('ancho');
            $table->string('estado');

            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materiales')->onDelete('cascade');

            $table->integer('proveedor_id')->unsigned();
            $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('cascade');

            $table->integer('talle_id')->unsigned();
            $table->foreign('talle_id')->references('id')->on('talles')->onDelete('cascade');

            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');

stockMin

            $table->integer('stockMinimo');
            $table->integer('stock');

            $table->string('descripcion',500);

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
        Schema::drop('articulos');
    }
}
