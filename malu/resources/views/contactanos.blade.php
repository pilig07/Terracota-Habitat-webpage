<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/924c212a80.js" crossorigin="anonymous"></script>

    <title>Terracota Hábitat (Home-Logeado) </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style type="text/css">
        .body {
            width: 100%;
            background-color: white;
        }

        
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
@if (Auth::guest())
@include('layout')            
  @else
  
  @if(Auth::user()->idRol==1)
        @include ('layoutUs')
    @else    
        @include ('layoutAdmin')
    @endif   
  @endif
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">No te quedes con ninguna duda, ¡Contáctanos!</h1>
        <p class="col-md-8 fs-4">Toda la información que necesites sobre alguna propiedad, no dudes en llamar o mandar un email, estamos a tus ordenes.</p>
      </div>
    </div>
    <div class="container">
    <div class="card shadow-lg p-3 mb-5 bg-body rounded">
  <div class="card-header text-center">
    Información de contacto
  </div>
  <div class="card-body align-items-center">
    <h5 class="card-title text-center">Contactanos</h5>
    <p class="card-text text-center">Siempre al pendiente de ti.</p>
    <ul class="list-group list-group-flush align-items-center">
    <li class="list-group-item">Teléfono: 444 265 0916</li>
    <li class="list-group-item">Correo: maluhouses_09@hotmail.com</li>
    <li class="list-group-item">Facebook: Terracota Hábitat</li>
  </ul>
  </div>
</div>
    </div>
    <div class="b-example-divider"></div>
    <br>
    <h1 class="text-muted text-center">Conoce a nuestro equipo de trabajo</h1>
    <br><br>
    <div class="row">
      <div class="col-lg-4 align-items-center">
      <img src="per1.jpg" class="rounded-circle mx-auto d-block" width="140" height="140"  alt="...">
        <h2 class="text-center">Raúl</h2>
        <p class="text-center">Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      </div>
      <div class="col-lg-4 align-items-center">
      <img src="per2.png" class="rounded-circle mx-auto d-block" width="140" height="140"  alt="...">
        <h2 class="text-center">Maria Luisa</h2>
        <p class="text-center">Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      </div>
      <div class="col-lg-4 align-items-center">
      <img src="per3.jpg" class="rounded-circle mx-auto d-block" width="140" height="140"  alt="...">
        <h2 class="text-center">Germán</h2>
        <p class="text-center">Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      </div>
      
    </div>
    @include ('footer')
</body>