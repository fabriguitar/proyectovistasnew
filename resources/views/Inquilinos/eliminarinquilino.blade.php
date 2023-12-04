<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Inquilino</title>

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
            height: 90vh;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        #content {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 60%;
            max-width: 900px;
        }

        h1, p {
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #555;
        }

        a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h1>Eliminar Inquilino</h1>

    <p>¿Estás seguro de que deseas eliminar este inquilino?</p>

    <form action="{{ url('/inquilinos/eliminar/' . $idInquilino) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>

    <a href="{{ route('inquilinos.mostrar') }}">Volver a la lista de inquilinos</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @elseif(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

</div>

</body>
</html>

