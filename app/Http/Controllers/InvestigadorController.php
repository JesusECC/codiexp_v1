<?php

namespace codiexp\Http\Controllers;

use Illuminate\Http\Request;
use codiexp\Http\Requests\InvestigadorRequest;
use codiexp\Investigador;
use DB;
class InvestigadorController extends Controller
{
    public function index()
    {
        $investigador = DB::table('investigador')
        ->where('estado','=',1)
        ->get();
        return view("index.investigadores",['investigador'=>$investigador]);
    
    }
    public function investigador($id)
    {    
        $investigador = DB::table('arti_inves as artin')
        ->join('investigador as in','in.id','=','artin.investigador_id')
        ->join('articulo as art','art.id','=','artin.articulo_id')
        ->where("in.estado",'=',1)
        ->where('in.id','=',$id)
        //->where('artin.rol','=','principal')
        //->select('in.id','in.nombre','in.apellido','in.foto','in.cargo','in.cargo','in.correo','in.perfil','in.estado')
        ->distinct()
        ->get(); 
        $inves=true;
        // dd(count($investigador));
        if(count($investigador)==0){
            $investigador = DB::table('investigador')
            ->where('estado','=',1)
            ->where('id','=',$id)
            ->get();
            $inves=false;
        }
        // dd($investigador);
      //  dd(isset($investigador[0]->id), $investigador);
        return view("index.investigador",['investigador'=>$investigador,'inves'=>$inves]);
    }
}
