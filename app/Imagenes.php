<?php

namespace codiexp;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    //referencia a la tabla articulo//
    protected $table='imagenes';
    //su llave primaria //
    protected $primaryKey='id';
    //para agregar dos columnas de creación y de actualización//
    public $timestamps=true;
    //campos que reciben un valor para despues ser almacenados//
    protected $fillable=[
        'imagen1',
        'imagen2',
        'imagen3',
        'imagen4',
        'imagen5',
        'imagen6',
        'imagen7',
        'imagen8',
        'imagen9',
        'imagen10',

    ];
    //campos que no queremos que se asigne al modelo//
    protected $guarded = [
    ];
}
