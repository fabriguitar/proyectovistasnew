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
            max-width: 500px; /* Reducí el ancho máximo para una mejor apariencia */
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            box-sizing: border-box;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="content">
    <h1>Crear Inquilino</h1>

    <form action="/crearInquilino" method="post">
        <!-- Agrega campos del formulario según tus necesidades -->
        <label>Nombre:</label>
        <input type="text" name="Nombre">

        <label>Apellido:</label>
        <input type="text" name="Apellido">

        <label>Teléfono:</label>
        <input type="text" name="Telefono">

        <label>Correo:</label>
        <input type="text" name="Correo">

        <label>Fecha de Ingreso:</label>
        <input type="text" name="FechaIngreso">

        <button type="submit">Crear Inquilino</button>
        
    </form>

</body>
</html>
