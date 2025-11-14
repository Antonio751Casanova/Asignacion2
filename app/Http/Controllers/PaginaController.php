<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;


class PaginaController extends Controller
{
    /**
     * 
     *
     * @return View
     */
    public function mostrarBienvenida(): View
    {
        
        return view('bienvenida');
    }

    /**
     * 
     * @param  string 
     * @return View
     */
    public function mostrarSaludo(string $nombre): View
    {
        
        return view('saludo', [
            'nombre' => $nombre
        ]);

        
    }
}