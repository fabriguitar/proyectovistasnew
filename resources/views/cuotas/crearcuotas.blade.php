<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cuota</title>
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('{{ asset('imagen/Finanzas.jpeg') }}');
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
            background-color: #33333380; /* Ajusta el color de fondo del formulario según sea necesario */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 23%;/* Agrega una sombra suave al formulario */
            margin-top: 5%
        }

        label {
            color: white;
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
            background-color: #33333390;
            color: white;
            padding: 0.75rem 1rem;
            border: none;
            cursor: pointer;
        }

    </style>
</head>
<body>

    <form action="{{ route('cuotas.nueva') }}" method="POST">
        @csrf
        @method("POST")

        <label for="numApartamento">Número de Apartamento</label>
        <input type="number" id="numApartamento" name="numApartamento">

        <label>Monto</label>
        <input type="number" step=".01" name="monto">

        <label>Descripción</label>
        <input type="text" name="descripcion">

        <button type="submit">Crear Cuota</button>
    </form>

</body>
</html>
