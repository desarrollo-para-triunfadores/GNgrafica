<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResponIva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responIva', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->double('iva');          // porcentaje de IVA aplicado
            $table->string('factura');      //tipo factura
            $table->string('descripcion');
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
        Schema::drop('responIva');
    }
}
