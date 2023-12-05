<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>🏢 Cuotas</title>
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('{{ asset('imagen/Finanzas.jpeg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center ;
            background-attachment: fixed;
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

        .anchor {
            color: white;
            text-decoration: none;
            padding: 1rem;
            margin-left: 1rem;
            background-color: #33333380;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">🏢 Apartamentos Sisyphus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('apartamento.show') }}">Apartamentos</a>
                            <a class="dropdown-item" href="{{ route('dueno.home') }}">Dueños</a>
                            <a class="dropdown-item" href="{{ route('inquilinos.mostrar') }}">Inquilinos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('cuotas.all') }}">Pago de Cuotas</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <h1 style="margin: 2rem 1rem;">Listado de Cuotas</h1>

    <a class="anchor" style="margin-top: 3rem;" href="{{ route('cuotas.crear')}}">Nueva Cuota</a>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Inquilino</th>
                <th>Núm. Apartamento</th>
                <th>Monto</th>
                <th>Descripción</th>
                <th>Fecha y Hora</th>
                <th>Pago</th>
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
                    <td style="padding: 0; display: flex;">
                        <a class="table-button anchor" style="margin: 0.25rem auto; padding: 0.5rem;" href="{{ route('cuotas.cancelar') . "?codigoCuota=" . $cuota->codigoCuota }}">Cancelar</a>
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
