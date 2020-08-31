<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_cuotas extends Model
{
    //Aqui se establece la relacion entre modelos
    //-----------------------------------------------

    //indico la tabla. 
    protected $table = 'tb_cuotas';
    //Que campos van a poder ser llenados
    protected $fillable = ['id', 'nombre', 'usuario', 'activo', 'fecha_cuota_vencimiento', 'periodo', 'importe_cuota', 'estado', 'importe_pagado', 'direrencia_pago', 'observaciones', 'comentarios'];  
}
