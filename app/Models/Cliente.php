<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'idcliente';
    public $timestamps = false;

    protected $fillable = [
            'nombreapellido', 
            //'apellidos', 
            'email', 
            'telefono', 
            'pais',
            'prefijopais',
            'profesion',
            'empresa',
            //'cursos',
            'programa',
            'idprograma',
            'idtipoprograma',
            'dni', 
            'idcampania', 
            'fecharegistro', 
            'coddistrito', 
            'utm', 
            'campaign_content',
            'campaign_medium',
            'campaign_name',
            'campaign_source',
            'campaign_term',
            'procedencia',
            //'colegio', 
            //'anioegreso', 
            'estado', 
    ];

    protected $hidden = [
        'userinsert', 
        'dateinsert', 
        'userupdate', 
        'dateupdate',
    ];
}
