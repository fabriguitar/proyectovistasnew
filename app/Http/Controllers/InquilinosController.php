<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class InquilinosController extends Controller {




    public function show($idInquilino)
    {
        $urlInquilino = 'http://localhost:8080/api/inquilinos/obtener?idInquilino=' . $idInquilino;

        // Realizar la solicitud HTTP usando Guzzle, asegúrate de tenerlo instalado
        $client = new \GuzzleHttp\Client();
        $response = $client->get($urlInquilino);

        // Obtener la respuesta en formato JSON
        $inquilinos = json_decode($response->getBody(), true);

        // Enviar los datos a la vista
        return view('Inquilinos.inquilinofind', compact('inquilinos'));
    }



    public function mostrar() {

        $url = 'http://localhost:8080/api/inquilinos/obtener/todos';

        $response = Http::get($url);
        $inquilinos = $response->json();
    return view('Inquilinos.mostrarinquilinos',compact('inquilinos'));
}
public function crear() {
    return view('Inquilinos.crearinquilino');
}

public function store(Request $request)
{
    $inquilinos = array(
        'nombre' => $request->input('nombre'),
        'apellidos' => $request->input('apellidos'),

        'direccion' => $request->input('direccion'),
        'telefono' => $request->input('telefono'),
        'correo' => $request->input('correo'),
        'fechaingreso' => $request->input('fechaingreso'),
    );



$client = new Client();
$request = $client->post('localhost:8080/api/inquilinos/crear',
['json' => $inquilinos]
);

if ($request->getStatusCode() == 200) {
    return $this->mostrar();
}
echo "Ha ocurrido un error!";
}




public function destroy($idInquilino)
{
    $client = new Client();



        $response = $client->delete('localhost:8080/api/inquilinos/eliminar?idInquilino=' . $idInquilino);


        $statusCode = $response->getStatusCode();

        if ($statusCode == 204) {

            return $this->index();
        } else {

            return response()->json(['mensaje' => 'Error al eliminar el dato'], $statusCode);
        }

}





}
