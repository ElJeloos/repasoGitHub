<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Libretad </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

</head>


<body class=" text-center ">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="Registro/create">Registrar libro</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('autor.index')}}" >Vista de Autores</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="RegistroA">Registrar Autor</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('autor.index')}}" >Vista de Autores</a>
        </li>

        

        


        
      </ul>
    </div>
  </div>
</nav>

@yield('contenido') 


<div class="position-absolute bottom-0 end-0">

  <p>Magic Book's CopyRight© 
    <?php
      date_default_timezone_set('America/Mexico_City');
      $fecha = date('d/m/y h:i:s');
      echo "$fecha <br>";
    ?>
    </p>
</div>







    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>




</html>