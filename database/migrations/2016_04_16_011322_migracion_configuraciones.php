<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionConfiguraciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuraciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen');
            $table->string('nombre');
            $table->string('cuit');
            $table->string('telefono');
            $table->string('email');
            $table->integer('localidad_id')->unsigned();            
            $table->string('direccion');

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
        Schema::drop('configuraciones');
    }
}
