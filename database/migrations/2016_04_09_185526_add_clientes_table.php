<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');

            $table->string('empresa');
            $table->string('descripcion');
            $table->string('cuit');
            $table->string('dni');
            $table->string('telefono')->unique();
            $table->string('email')->unique();
            $table->string('direccion');

            $table->integer('responiva_id')->unsigned();
            $table->foreign('responiva_id')->references('id')->on('responiva')->onDelete('cascade');
            $table->integer('localidad_id')->unsigned();
            $table->foreign('localidad_id')->references('id')->on('localidades')->onDelete('cascade');

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
        Schema::drop('clientes');
    }
}
