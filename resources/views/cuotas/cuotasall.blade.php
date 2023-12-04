<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>🏘️ Apartamentos - Cuotas</title>
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('{{ asset('imagen/Finanzas.jpeg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center ;
            background-attachment: fixed;
            margin: 1rem;
            justify-content: center;
            align-items: center;
            color: white;
        }

        table {
            width: 80%; /* Ajusta el ancho según sea necesario */
            margin: 5%;
            margin-left:30%
            border-collapse: collapse;
        }

        th, td {
            padding: 0.5rem;
            text-align: left;
        }

        th {
            background-color: #33333380;
        }

        td {
            background-color: #ffffff10;

        }

        tr td:last-child {
            background: none;
            padding-left: none;
        }

        .table-button {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        h1 {
            color: white;
            padding: 3rem:
        }

        a {
            color: white;
            text-decoration: none;
            padding: 1rem;
            margin-left: 2rem;
            background-color: #33333380;
        }
    </style>
</head>
<body>
    <h1>Listado de Cuotas</h1>

    <a style="margin-top: 3rem;" href="{{ route('cuotas.crear')}}">Nueva Cuota</a>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Inquilino</th>
                <th>Núm. Apartamento</th>
                <th>Monto</th>
                <th>Descripción</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cuotas as $cuota)
                <tr>
                    <td>{{ $cuota->codigoCuota }}</td>
                    @if ($cuota->inquilino != null)
                    <td>{{ $cuota->inquilino->idInquilino }}</td>
                    @else
                    <td>---</td>
                    @endif
                    <td>{{ $cuota->apartamento->numApartamento }}</td>
                    <td>{{ $cuota->monto }}</td>
                    <td>{{ $cuota->descripcion }}</td>
                    <td>{{ $cuota->fechaCobro }}</td>
                    @if ($cuota->cancelada == false)
                    <td style="padding: 0;">
                        <a class="table-button" href="{{ route('cuotas.cancelar') . "?codigoCuota=" . $cuota->codigoCuota }}">Cancelar</a>
                    </td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>
