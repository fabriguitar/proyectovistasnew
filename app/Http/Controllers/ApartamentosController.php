<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApartamentosController extends Controller
{
  public function show (){
    return view('');
  }
  public function crear () {
     return view('newapartamento');
    }
    public function mostrar () {

        $method = 'GET';
        $url = 'localhost:8080/api/apartamentos/obtener/todos';

        $client = new Client();
        $response = $client->request($method, $url)->getBody();

        $apartamentos = json_decode($response);

        return view('mostrarapartamentos', compact('apartamentos'));
    }
       public function ver () {
        return view('verapartamento');
       }

       public function agregar () {
        return view('asignarinquilino');
       }
  }

