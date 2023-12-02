<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuotasController extends Controller
{
    public function index()
{

    return view('cuotas.cuotasall');
}
public function crear()
{

    return view('cuotas.crearcuotas');
}
public function store()
{

    
    return redirect('/cuotas.cuotasall')->with('success', 'Cuota creada exitosamente');
}

}
