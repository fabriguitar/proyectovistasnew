<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-image: url('{{ asset('imagen/Finanzas.jpeg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center ;
            background-attachment: fixed;
            margin: 0;
            justify-content: center;
            align-items: center;
        }

        table {
            width: 80%; /* Ajusta el ancho según sea necesario */
           margin: 5%;
            margin-left:30%
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: rgb(198, 207, 216);
        }
    </style>
</head>
<body>
    <h1>Listado de Cuotas</h1>

    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Inquilino</th>
                <th>Número de Apartamento</th>
                <th>Monto</th>
                <th>Descripción</th>
                <th>Fecha de Cobro</th>
            </tr>
        </thead>

        </tbody>
    </table>

</body>
</html>
