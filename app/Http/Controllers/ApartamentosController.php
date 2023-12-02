<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApartamentosController extends Controller
{
  public function show (){
    return view('');
  }
  public function crear () {
     return view('newapartamento');
    }
    public function mostrar () {
        return view('mostrarapartamentos');
       }
       public function ver () {
        return view('verapartamento');
       }

       public function agregar () {
        return view('asignarinquilino');
       }
  }

