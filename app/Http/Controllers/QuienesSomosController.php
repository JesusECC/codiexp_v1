<?php

namespace codiexp\Http\Controllers;

use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    //
    public function index()
    {
        return view("index.quienes");    
    }
    public function mision()
    {
        return view("index.mision");    
    }
}
