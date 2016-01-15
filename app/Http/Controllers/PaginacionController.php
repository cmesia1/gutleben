<?php

namespace Tesis\Http\Controllers;

use Illuminate\Http\Request;

use Tesis\Http\Requests;
use Tesis\Http\Controllers\Controller;

class PaginacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');

    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function galeria()
    {
        return view('galeria');
    }

    public function patrocinadores()
    {
        return view('empresas');
    }

    public function articulos()
    {
        //
    }
    public function agenda()
    {
        return view('eventos');
    }
    public function foro()
    {
        //
    }

    public function contacto()
    {
        return view('contacto');
    }

}
