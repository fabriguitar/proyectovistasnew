<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>🏢 Apartamentos</title>
    <style>
        body {
            background-image: url('{{ asset('imagen/lista.jfif') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center ;
            background-attachment: fixed;
            margin: 0;
        }
        </style>
</head>

<body style="background-color:rgb(0, 0, 0) ; color:rgb(250, 250, 250);">

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
    <div id="contenido">
        <h1 style="margin: 2rem 1rem;">Listado de Apartamentos</h1>
        <div style="margin: 20px;">
            <table style="border-collapse: collapse; width: 100%; background-color: #f2f2f2;">
                <thead>
                    <tr style="background-color: #333; color: white;">
                        <th style="padding: 10px;">Núm. Apartamento</th>
                        <th style="padding: 10px;">Área</th>
                        <th style="padding: 10px;">Precio por Metro</th>
                        <th style="padding: 10px;">Disponible</th>
                        <th style="padding: 10px;">Dueño</th>
                        <th style="padding: 10px;">Inquilino</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($apartamentos as $apartamento)
                    <tr style="background-color: white;">
                        <td style="border: 1px solid #ddd; padding: 8px; color: black;" >{{ $apartamento->numApartamento}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px; color: black;" >{{ $apartamento->area}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px; color: black;" >{{ $apartamento->precioXmetro}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px; color: black;" >{{ $apartamento->disponible}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px; color: black;" >{{ $apartamento->dueno->idDueno}}</td>
                        @if ($apartamento->inquilino != null)
                        <td style="border: 1px solid #ddd; padding: 8px; color: black;" >{{ $apartamento->inquilino->idInquilino}}</td>
                        @else
                        <td style="border: 1px solid #ddd; padding: 8px; color: black;" >---</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
