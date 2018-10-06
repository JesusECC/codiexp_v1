<?php

namespace codiexp\Http\Controllers;

use Illuminate\Http\Request;
use codiexp\Http\Requests\InvestigacionRequest;
use codiexp\Investigador;
use DB;

class InvestigacionController extends Controller
{
    public function index()
    {
        $investigacion = DB::table('articulo')
        ->where('realizo','=','cic')
        ->get();
        return view("index.investigaciones",['investigacion'=>$investigacion]);    
    }

    public function investigacion($id)
    {
        $investigacion = DB::table('articulo')
        ->where('id','=',$id)
        ->get();
        //dd($investigacion);
        return view("index.investigacion",['investigacion'=>$investigacion]);
    
    }
}
