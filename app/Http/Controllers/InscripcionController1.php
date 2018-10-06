<?php

namespace codiexp\Http\Controllers;
use codiexp\Inscripcion;
use Illuminate\Support\Facades\Redirect;
use codiexp\Http\Requests\InscripcionRequest;
use DB;

use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("index.inscripciones");    
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
    public function store(InscripcionRequest $request)
    {
        $inscriocion=new Inscripcion;
        $inscriocion->nombres=$request->get('nombres');
        $inscriocion->ape_paterno=$request->get('apellidos-paterno');
        $inscriocion->ape_materno=$request->get('apellidos-materno');
        $inscriocion->ciclo=$request->get('ciclo');
        $inscriocion->carrera=$request->get('carrera');
        $inscriocion->telefono=$request->get('telefono');
        $inscriocion->correo_institucional=$request->get('correo');
        $inscriocion->correo_alte=$request->get('correo1');
        $inscriocion->declaracion=$request->get('declaracion');
        $inscriocion->save();
        return view("index.inscripciones");
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
