<?php

namespace codiexp\Http\Controllers;

use Illuminate\Http\Request;
use codiexp\Http\Requests\ImagenesRequest;
use codiexp\Imagenes;
use DB;
class ImagenesController extends Controller
{
    public function index()
    {
        $investigacion = DB::table('articulo')
        ->get();
        return view("index.investigaciones",['investigacion'=>$investigacion]);    
    }
    public function imagenArti($id)
    {
        $imagenes = DB::table('imagenes')
        ->where('articulo_id','=',$id)
        ->get();
        //dd($imagenes,$id);
        return view("index.imagenes",['imagenes'=>$imagenes]);    
    }
    public function video($id)
    {
        $videos = DB::table('videos')
        ->where('articulo_id','=',$id)
        ->get();
        //dd($videos ,$id);
        return view("index.video",['videos'=>$videos]);    
    }
}
