<?php

namespace codiexp;

use Illuminate\Database\Eloquent\Model;

class ConcursoCisco extends Model
{
    //referencia a la tabla articulo//
    protected $table='concurso_cisco';
    //su llave primaria //
    protected $primaryKey='id';
    //para agregar dos columnas de creación y de actualización//
    public $timestamps=true;
    //campos que reciben un valor para despues ser almacenados//
    protected $fillable=[
        'nombres',	
        'ape_paterno',	
        'ape_materno',	
        'ciclo',	
        'carrera',
        'sede',	
        'telefono',	
        'correo_institucional',	
        'correo_alter',	
        'inter_hackathon_cisco',	
        'hult_prize',	
        'curso_cisco',	
        'curso_emprendimiento',	
        'certi_cisco',	
        'created_at',	
        'updated_at',
    ];
    //campos que no queremos que se asigne al modelo//
    protected $guarded = [

    ];
}

