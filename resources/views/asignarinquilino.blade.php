<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-image: url('{{ asset('imagen/new apartameto.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center ;
            background-attachment: fixed;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
        }

        form {
            width: 300px; /* Ajusta el ancho según sea necesario */
            text-align: center;
            color: rgb(43, 28, 28);
        }
        </style>
</head>
<body>
    <h1>Agregar Inquilino al Apartamento</h1>
    <form action="/agregarInquilino" method="put">
        <label>Número de Apartamento: <input type="text" name="numApartamento"></label><br>
        <!-- Agregar lista de inquilinos -->
        <label for="inquilino">Selecciona un Inquilino:</label>
        <select name="inquilino" id="inquilino">
            <option value="1">Inquilino 1</option>
            <option value="2">Inquilino 2</option>
            <!-- Agrega más opciones según sea necesario -->
        </select><br>

        <!-- Agrega más campos según sea necesario -->
        <input type="submit" value="Agregar Inquilino">
    </form>
</body>
</html>
