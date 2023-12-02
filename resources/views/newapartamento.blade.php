<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Apartamento</title>

        <style>
        body {
            background-image: url('{{ asset('imagen/new apartameto.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center ;
            background-attachment: fixed;
            margin: 0;
        }
        #formulario {
    background-color: rgba(43, 40, 40, 0.774);
    color: #fff;
    width: 330px;
    height: 700px;
    border-radius: 5px;
    padding: 30px 60px;
    margin-left: auto;
    margin-right: auto;
    transition: background-color 1s ease-in-out;
}
#formulario:hover {
    background-color: #3a3d3b;
    border: 4px solid #fff;
}
#formulario h1 {
    font-size: 32px;
    font-weight: 700;


}
    </style>

</head>
<body style="background-color:rgb(0, 0, 0) ; color:rgb(250, 250, 250);">
    <div id="contenido">
        <section id="formulario">
            <h1>Crear Nuevo Apartamento</h1>
            <form action="/crear" method="post" th:object="${nvoApartamento}">
                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                    <label style="margin-bottom: 5px;">Número de Apartamento:</label>
                    <input type="text" th:field="*{numApartamento}" style="padding: 5px; margin-bottom: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                    <label style="margin-bottom: 5px;">Área:</label>
                    <input type="text" th:field="*{AreaApart}" style="padding: 5px; margin-bottom: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                    <label style="margin-bottom: 5px;">Precio por Metro:</label>
                    <input type="text" th:field="*{PrecioXmetro}" style="padding: 5px; margin-bottom: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                    <label style="margin-bottom: 5px;">Disponible:</label>
                    <input type="checkbox" th:field="*{Disponible}" style="margin-bottom: 10px;">
                </div>
                <!-- Agrega más campos según sea necesario -->
                <input type="submit" value="Crear Apartamento" style="padding: 5px;">
            </form>
        </section>
    </div>
</body>

</html>
