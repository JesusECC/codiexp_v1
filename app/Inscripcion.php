<?php

namespace codiexp;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    //referencia a la tabla articulo//
    protected $table='inscripciones';
    //su llave primaria //
    protected $primaryKey='id';
    //para agregar dos columnas de creación y de actualización//
    public $timestamps=false;
    //campos que reciben un valor para despues ser almacenados//
    protected $fillable=[
        'tipo_persona',
        'nombres',
        'ape_paterno',
        'ape_materno',
        'ciclo',
        'carrera',
        'telefono',
        'correo_institucional',
        'correo_alte',
        'declaracion',
    ];
    //campos que no queremos que se asigne al modelo//
    protected $guarded = [

    ];
}
