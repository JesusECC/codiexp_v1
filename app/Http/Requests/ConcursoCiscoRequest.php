<?php

namespace codiexp\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConcursoCiscoRequest extends FormRequest
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
            //
            'nombres'=>'required|max:100',
            'apellidos-paterno'=>'required|max:100',
            'apellidos-materno'=>'required|max:100',
            'ciclo'=>'required|max:2',
            'carrera'=>'required',
            'sede'=>'required',
            'telefono'=>'required|max:10',
            'correo'=>'required|unique:concurso_cisco,correo_institucional|email',
            'correo1'=>'required|unique:concurso_cisco,correo_alter|email',
            // 'Hackathon_Cisco'=>'required|max:100',
            // 'Concurso_Hult_Prize'=>'required|max:100',
            // 'Cursos_Cisco'=>'required|max:100',
            // 'Cursos_Emprendimiento'=>'max:100',
            // 'Certificaciones_Cisco'=>'required|max:100',
            // 'Comunidad_Investigacion'=>'required|max:100',

        ];
    }
    public function messages()
    {
        return [
            
        ];
    }
}