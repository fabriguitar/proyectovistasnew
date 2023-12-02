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
        form {
            width: 50%; /* Ajusta el ancho del formulario según sea necesario */
            padding: 20px;
            background-color: #5e5959; /* Ajusta el color de fondo del formulario según sea necesario */
            border-radius: 8px; /* Agrega bordes redondeados al formulario */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 23%;/* Agrega una sombra suave al formulario */
            margin-top: 5%
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body>

    <form action="/cuotas" method="post">
        @csrf
        <!-- Agrega campos del formulario según tus necesidades -->
        <label>Inquilino:</label>
        <!-- Puedes usar un campo select para seleccionar inquilino -->
        <select name="inquilino_id">

        </select>

        <label>Número de Apartamento:</label>
        <input type="text" name="numApartamento">

        <label>Monto:</label>
        <input type="text" name="Monto">

        <label>Descripción:</label>
        <input type="text" name="Descripcion">

        <label>Fecha de Cobro:</label>
        <input type="text" name="FechaCobro">

        <button type="submit">Crear Cuota</button>
    </form>

</body>
</html>
