<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCuotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cuotas', function (Blueprint $table) {            
            //El método bigIncrements crea un campo bigint de longitud 20, unsigned y que es la llave primaria de la tabla.
            $table->bigIncrements('id');    //Predefined ID   
            //El método string crea un campo de tipo varchar de longitud 255.                                       
            $table->string('nombre');
            $table->string('usuario');
            $table->boolean('activo')->default(true);
            $table->date('fecha_cuota_vencimiento');
            $table->string('periodo');
            $table->decimal('importe_cuota', 8, 2);
            //$table->varchar('estado');
            $table->enum('estado', ['En plazo', 'Impagado']);
            //El método enum crear una columna de tipo enum con los valores permitidos 
            //pasados como segundo parámetro en el array.
            $table->decimal('importe_pagado', 8, 2)->nullable();
            $table->decimal('direrencia_pago', 8 , 2);
            $table->text('observaciones')->nullable();
            $table->text('comentarios')->nullable();    //comenarios del administrador del sistema, no visible
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
        Schema::dropIfExists('tb_cuotas');
    }
}
