<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa; /* Ajusta el color de fondo según sea necesario */
        }

        div {
            text-align: center;
            background-color: #fff; /* Ajusta el color de fondo del formulario según sea necesario */
            padding: 20px;
            border-radius: 8px; /* Agrega bordes redondeados al formulario */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Agrega una sombra suave al formulario */
        }

        form {
            width: 300px; /* Ajusta el ancho según sea necesario */
            margin: 0 auto; /* Establece márgenes automáticos a ambos lados para centrar el formulario */
        }
    </style>
</head>
<body>
    <div>
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
    </div>
</body>
</html>
