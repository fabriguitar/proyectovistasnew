<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-image: url('{{ asset('imagen/apartamentos-modernos.png') }}');
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
<a href="{{route('dueno.nuevo')}}" class="btn btn-primary">Crear Dueño</a>

<body style="background-color:rgb(0, 0, 0) ; color:rgb(250, 250, 250);">
    <div id="contenido" class="p-5">
        <h1>Listado de Duenios</h1>
        <div class="col-x1-12">
           

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
                    @foreach ($registro as $registro)
                    <tr style="background-color: white; color: black;">
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$registro['idDueno']}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$registro['nombre']}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$registro['apellido']}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$registro['telefono']}}</td>
                        <td style="border: 1px solid #ddd; padding: 8px;">{{$registro['correo']}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
