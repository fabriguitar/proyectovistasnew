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
            background-color: rgba(105, 72, 72, 0.9);
            border-radius: 10px;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #db8d8d;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <div id="content">
    <h1> <h3>{{$inquilinos['nombre']}}</h3></h1>
    <a style="margin-top: 3rem;" href="">inquilino</a>
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

                <td>{{ $inquilinos['idInquilino']}}</td>
                    <td>{{ $inquilinos['nombre']}}</td>
                    <td>{{ $inquilinos['apellido']}}</td>
                    <td>{{ $inquilinos['telefono']}}</td>
                    <td>{{ $inquilinos['correo']}}</td>
                    <td>{{ $inquilinos['fechaIngreso']}}</td>
                    <td>

                </tr>

        </tbody>
    </table>
    <a href="{{route('inquilinos.mostrar')}}" class="btn btn-info">Regresar</a>
</div>
</body>
</html>
