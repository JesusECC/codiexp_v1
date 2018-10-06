<?php

namespace codiexp\Http\Controllers;

use Illuminate\Http\Request;
use Articulo;
use DB;
class InvestigacionesUpnController extends Controller
{
    //
    public function index()
    {
        $investigacion = DB::table('articulo')
        ->where('realizo','=','upn')
        ->get();
        return view("index.investigaciones",['investigacion'=>$investigacion]);    
    }
}
