<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atencion extends Model
{
    protected $table = 'atenciones';
    protected $primaryKey = 'idatencion';
    public $timestamps = false;

    protected $fillable = [
        'iduser',
        'fechaatencion',
        'idcliente',
        'fechaagenda',
        'comentario',
        'proximoinicio',
        'idtipoatencion',
        'idetiquetatele',
        'estado'
    ];

    protected $hidden = [
        'userinsert',
        'dateinsert',
        'userupdate',
        'dateupdate',
    ];
    protected $casts = [
        'fechaatencion' => 'datetime:Y-m-d H:i:s',
        'fechaagenda' => 'datetime:Y-m-d H:i:s',
    ];

    protected $appends = [

        'isactive',
        'statename',
        'fecha',
        'fechaagendada',
        'fechatendida',
        'isattended',
    ];


}
