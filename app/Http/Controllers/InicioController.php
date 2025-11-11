<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
     public function inicio_web(){

         $vehiculos = include app_path('Helpers/vehiculos.php');
        return view('neweb.inicio', compact('vehiculos'));
        
    }
    public function galeria_nueva(){
        $vehiculos = include app_path('Helpers/vehiculos.php');
         shuffle($vehiculos);

    // Divide en dos grupos de 5 sin repetir
    $vehiculos_scroll = array_slice($vehiculos, 0, 5);
    $vehiculos_pie = array_slice($vehiculos, 5, 5);
         return view('neweb.galeria',compact('vehiculos_scroll','vehiculos_pie'));
    }
}
