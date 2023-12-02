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
            background-position: center center ;
            background-attachment: fixed;
            margin: 0;
        }
        </style>
</head>

<body style="background-color:rgb(0, 0, 0) ; color:rgb(250, 250, 250);">
    <div id="contenido">
        <h1>Listado de Apartamentos</h1>
        <div style="margin: 20px;">
            <table style="border-collapse: collapse; width: 100%; background-color: #f2f2f2;">
                <thead>
                    <tr style="background-color: #333; color: white;">
                        <th style="padding: 10px;">Número de Apartamento</th>
                        <th style="padding: 10px;">Área</th>
                        <th style="padding: 10px;">Precio por Metro</th>
                        <th style="padding: 10px;">Disponible</th>
                        <th style="padding: 10px;">Dueño</th>
                        <th style="padding: 10px;">Inquilino</th>
                    </tr>
                </thead>
                <tbody>
                    <tr th:each="apartamento : ${apartamentos}" style="background-color: white;">
                        <td style="border: 1px solid #ddd; padding: 8px;" th:text="${apartamento.numApartamento}"></td>
                        <td style="border: 1px solid #ddd; padding: 8px;" th:text="${apartamento.AreaApart}"></td>
                        <td style="border: 1px solid #ddd; padding: 8px;" th:text="${apartamento.PrecioXmetro}"></td>
                        <td style="border: 1px solid #ddd; padding: 8px;" th:text="${apartamento.Disponible} ? 'Sí' : 'No'"></td>
                        <td style="border: 1px solid #ddd; padding: 8px;" th:text="${apartamento.Dueno.nombre}"></td>
                        <td style="border: 1px solid #ddd; padding: 8px;" th:text="${apartamento.inquilino.nombre}"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
