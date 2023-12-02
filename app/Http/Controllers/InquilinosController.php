<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquilinosController extends Controller
{
    public function obtenerTodos() {
        return view('Inquilinos.mostrarinquilinos');
    }

    public function crear() {
        return view('Inquilinos.crearinquilino');
    }
    public function eliminarInquilino() {
        return view('Inquilinos.eliminarinquilino');
    }

}
