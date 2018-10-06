<?php

namespace codiexp\Http\Controllers;

use Illuminate\Http\Request;
use codiexp\Http\Requests\ConcursoCiscoRequest;
use codiexp\ConcursoCisco;
use DB;

use Illuminate\Support\Facades\Redirect;

class ConcursoCiscoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("index.evento");     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConcursoCiscoRequest $request)
    {
        //
        // dd($request);
        $evento=new ConcursoCisco;        
        $evento->id=$request->get('');
        $evento->nombres=$request->get('nombres');	
        $evento->ape_paterno=$request->get('apellidos-paterno');	
        $evento->ape_materno=$request->get('apellidos-materno');	
        $evento->ciclo=$request->get('ciclo');	
        $evento->carrera=$request->get('carrera');	
        $evento->sede=$request->get('sede');	
        $evento->telefono=$request->get('telefono');	
        $evento->correo_institucional=$request->get('correo');	
        $evento->correo_alter=$request->get('correo1');	
        $evento->inter_hackathon_cisco=$request->get('Hackathon_Cisco');	
        $evento->hult_prize=$request->get('Concurso_Hult_Prize');	
        $evento->curso_cisco=$request->get('Cursos_Cisco');	
        $evento->curso_emprendimiento=$request->get('Cursos_Emprendimiento');	
        $evento->certi_cisco=$request->get('Certificaciones_Cisco');	
        $evento->comu_invest=$request->get('Comunidad_Investigacion');
        $evento->save();
        return view("index.evento");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
