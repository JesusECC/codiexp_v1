<?php

namespace codiexp;

use Illuminate\Database\Eloquent\Model;

class Investigacion extends Model
{
    //referencia a la tabla articulo//
    protected $table='articulo';
    //su llave primaria //
    protected $primaryKey='id';
    //para agregar dos columnas de creación y de actualización//
    public $timestamps=true;
    //campos que reciben un valor para despues ser almacenados//
    protected $fillable=[
        'titulo',
        'descripcion',
        'ano',
        'ruta',
    ];
    //campos que no queremos que se asigne al modelo//
    protected $guarded = [
    ];
}
