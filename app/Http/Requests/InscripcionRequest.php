<?php

namespace codiexp\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscripcionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombres'=>'required|max:100',
            'apellidos-paterno'=>'required|max:100',
            'apellidos-materno'=>'required|max:100',
            'ciclo'=>'required|max:2',
            'carrera'=>'required',
            'telefono'=>'required|max:9',
            'correo'=>'required|unique:inscripciones,correo_institucional|email|max:100',
            'correo1'=>'required|email|max:100',
            'declaracion'=>'required|max:2'


        ];
    }
    public function messages()
    {
        return [
            'nombres'=>'se requiere nombre',
            'apellidos-paterno'=>'se requiere apellido paterno',
            'apellidos-materno'=>'se requiere apellido materno',
            'ciclo'=>'se requiere el ciclo',
            'carrera'=>'Ingrese la carrera a la cual pertenece',
            'telefono'=>'se requiere el número telefónico',
            'correo'=>'se requiere correo institucional',
            'correo1'=>'se requiere correo alternativo',
            'declaracion'=>'se requiere la confirmacion de la decalaracion'
        ];
    }
}
