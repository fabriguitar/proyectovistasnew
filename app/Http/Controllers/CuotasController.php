<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CuotasController extends Controller
{
    public function index() {

        $method = 'GET';
        $baseUrl = 'localhost:8080/api/cuotas/obtener/todos';
        $requestParams = '?incluirCanceladas=true';
        $url = $baseUrl . $requestParams;

        $client = new Client();
        $response = $client->request($method, $url)->getBody();

        $cuotas = json_decode($response);

        return view('cuotas.cuotasall', compact('cuotas'));
    }

    public function crear() {
        return view('cuotas.crearcuotas');
    }

    public function nueva(Request $request) {

        $cuota = array(
            'numApartamento' => $request->input('numApartamento'),
            'monto' => $request->input('monto'),
            'descripcion' => $request->input('descripcion')
        );

        $method = 'POST';
        $url = 'localhost:8080/api/cuotas/nueva';

        $client = new Client();
        $status = $client
            ->post($url, ['json' => $cuota])
            ->getStatusCode();
        if ($status == 200) {
            return redirect(route('cuotas.all'))->with('success', 'Cuota cancelada exitosamente');
        } else {
            return redirect(route('cuotas.all'))->with('failure', 'Error al cancelar...');
        }
    }

    public function cancelar(Request $request) {

        $method = 'PUT';
        $baseUrl = 'localhost:8080/api/cuotas/cancelar';
        $requestParams = '?codigoCuota=' . $request->codigoCuota;
        $url = $baseUrl . $requestParams;

        $client = new Client();
        $status = $client->request($method, $url)->getStatusCode();
        if ($status == 200) {
            return redirect(route('cuotas.all'))->with('success', 'Cuota cancelada exitosamente');
        } else {
            return redirect(route('cuotas.all'))->with('failure', 'Error al cancelar...');
        }
    }

    public function cuotasDueno(Request $request) {

        $method = 'GET';
        $baseUrl = 'localhost:8080/api/cuotas/obtener/dueno';
        $requestParams = '?idDueno=' . $request->idDueno;
        $url = $baseUrl . $requestParams;

        $client = new Client();
        $response = $client->request($method, $url)->getBody();

        $cuotas = json_decode($response);

        return view('cuotas.cuotasall', compact('cuotas'));
    }

    public function cuotasInquilino(Request $request) {

        $method = 'GET';
        $baseUrl = 'localhost:8080/api/cuotas/obtener/inquilino';
        $requestParams = '?idInquilino=' . $request->idInquilino;
        $url = $baseUrl . $requestParams;

        $client = new Client();
        $response = $client->request($method, $url)->getBody();

        $cuotas = json_decode($response);

        return view('cuotas.cuotasall', compact('cuotas'));
    }

    public function cuotasApartamento(Request $request) {

        $method = 'GET';
        $baseUrl = 'localhost:8080/api/cuotas/obtener/apartamento';
        $requestParams = '?numApartamento=' . $request->numApartamento;
        $url = $baseUrl . $requestParams;

        $client = new Client();
        $response = $client->request($method, $url)->getBody();

        $cuotas = json_decode($response);

        return view('cuotas.cuotasall', compact('cuotas'));
    }
}
