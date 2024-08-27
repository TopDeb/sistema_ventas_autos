<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body{
        margin: 0px;
        padding: 0px;
    }
    .navbar-brand{
        padding-left: 2rem;
    }
</style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3F2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h4> Sistema de Venta de Autos </h4></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Marca</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Modelo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Miembro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Automovil</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @yield('content')  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>