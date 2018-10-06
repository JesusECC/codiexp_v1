<?php

namespace codiexp;

use Illuminate\Database\Eloquent\Model;

class Investigador extends Model
{
    //referencia a la tabla articulo//
    protected $table='investrigador';
    //su llave primaria //
    protected $primaryKey='id';
    //para agregar dos columnas de creación y de actualización//
    public $timestamps=false;
    //campos que reciben un valor para despues ser almacenados//
    protected $fillable=[
        'nombre',
        'apellido',
        'cargo',
        'perfil',
        'estado',
    ];
    //campos que no queremos que se asigne al modelo//
    protected $guarded = [
    ];
}
