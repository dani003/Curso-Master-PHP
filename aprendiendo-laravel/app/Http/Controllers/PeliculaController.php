<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina =1){
        $titulo = 'Listado de mis peliculas';
        return view('pelicula.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    public function detalle($year = null){
        return view('pelicula.detalle');
    }

    public function redirigir(){
        return redirect()->action('PeliculaController@detalle');
        //Puede ser action o tmb route para mandar a una
    }
}
