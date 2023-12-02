<!DOCTYPE html>
<html lang="en">
<head>
    <nav class="navbar navbar-dark bg-primary">
        <div class="text-center">
                           <h1>APARTAMENTOS SANTORINY</h1>
        </div>
      </nav>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>


        .card img {

            width: 35%;
            height: 47%;
        }
    </style>

</head>
<body>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <div class="text-center">
            <img src="{{asset('imagen/apartamento (4).jpg')}}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <div class="text-center">
              <h5 class="card-title">Apartamentos</h5>
            </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="text-center">
                <img src="{{asset('imagen/duenos (1).jpg')}}" class="rounded" alt="...">
              </div>
            <div class="card-body">
                <div class="text-center">
              <h5 class="card-title">Dueños</h5>
              </div>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('imagen/apartamento (4).jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="{{asset('imagen/apartamento (4).jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
</body>
</html>










.card img {
    width: 30%;
    height: 50%;
}
