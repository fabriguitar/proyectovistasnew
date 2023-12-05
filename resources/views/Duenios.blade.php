<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>🏢 Dueños</title>
    <style>
        body {
            background-image: url('{{ asset('imagen/apartamento.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center ;
            background-attachment: fixed;
            margin: 0;
        }
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    <a href="{{route('dueno.nuevo')}}" class="btn btn-primary">Crear Dueño</a>
    <div id="contenido" class="p-5">
        <h1>Listado de Duenios</h1>
        <div class="col-x1-12">
            <form action="{{route('dueno.buscar')}}" method="GET">
                <div class="form-row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="idDueno" id="idDueno">

                    </div>
                    <div class="col-auto">
                        <input type="submit" class="btn btn-primary" value="buscar">

                    </div>

                </div>
            </form>

        </div>
        <div style="margin: 20px;">
            <table style="border-collapse: collapse; width: 100%; background-color: #f2f2f2;">
                <thead class="bg-info">
                    <tr style="background-color: #333; color: white;">
                        <th style="padding: 10px;">IdDuenio</th>
                        <th style="padding: 10px;">Nombre</th>
                        <th style="padding: 10px;">Apellido</th>
                        <th style="padding: 10px;">Telefono</th>
                        <th style="padding: 10px;">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($duenos as $dueno)
                    <tr style="background-color: white; color: black;">
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$dueno['idDueno']}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$dueno['nombre']}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$dueno['apellido']}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$dueno['telefono']}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$dueno['correo']}}</td>
                        <td>
                            <form action="{{route('dueno.destroy',$dueno['idDueno'])}}" method="POST">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="btn btn-danger">eliminar</button>
                            </form>
                        </td>
                        <td>
                            <form action="">
                                <button type="submit" class="btn btn-primary">Cuota</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
