<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DuenioController extends Controller
{
    public function index(){
        $client = new Client();
        $response = $client->request('GET', 'localhost:8080/api/duenos/obtener/todos');
        $duenos = json_decode($response->getBody(), true);
        return view('Duenios', compact('duenos'));
    }

    public function create(Request $request){

        $dueno = array(
            "nombre" => $request->input('nombre'),
            "apellido" => $request->input('apellido'),
            "telefono" => $request->input('telefono'),
            "correo" => $request->input('correo'),
        );

        $client = new Client();
        $request = $client->post('localhost:8080/api/duenos/crear',
        ['json' => $dueno]
        );

        if ($request->getStatusCode() == 200) {
            return $this->index();
        }
        echo "Ha ocurrido un error!";
    }




    public function buscar(Request $request){

        $idDueno = $request->input('idDueno');



            $client = new Client();



                $response = $client->request('GET',"localhost:8080/api/duenos/buscar/".$idDueno);

             $registro = json_decode($response->getBody());


                return view('Resultados', compact('registro'));



    }

    public function destroy($idDueno)
    {
        $client = new Client();




            $data=[];
            $response=$client->request('DELETE', 'localhost:8080/api/duenos/eliminar/' . $idDueno, $data);

            $statusCode = $response->getStatusCode();

            if ($statusCode == 200) {

                return $this->index();
            } else {

                return response()->json(['mensaje' => 'Error al eliminar el dato'], $statusCode);
            }


}
}
