<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body {
        background-image: url('{{ asset('imagen/lista.jfif') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            color: #fff;
    }
    #content {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 80%;
            max-width: 600px;
        }

    h1 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: rgba(70, 53, 53, 0.9);
            border-radius: 10px;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #251616;
            color: #f0dcdc;
        }
    </style>
</head>
<body>

    <div id="content">
    <h1>Listado de Inquilinos</h1>
    <a style="margin-top: 3rem;" href="{{ route('inquilinos.crear')}}">Agregar inquilino</a>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Fecha de Ingreso</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($inquilinos as $item)

                    <td>{{ $item['nombre'] }}</td>
                    <td>{{ $item['apellido'] }}</td>
                    <td>{{ $item['telefono'] }}</td>
                    <td>{{ $item['correo'] }}</td>
                    <td>{{ $item['fechaIngreso'] }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
</body>
</html>
