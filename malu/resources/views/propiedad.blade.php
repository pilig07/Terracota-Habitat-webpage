<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/924c212a80.js" crossorigin="anonymous"></script>

    <title>Terracota Hábitat (Detalles propiedad)</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style type="text/css">
        .body {
            width: 100%;
            background-color: white;
        }
    </style>
    <link rel="stylt/csesheet" type="texs" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
    <br>
    <br>
    <br>
    <br>
    <h2 class="text-center h1" style="font-family: 'Open Sans Condensed', sans-serif;">{{$propiedad[0]->name}}</h2>
    <br>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
        <div class="col-sm-5 col-md-4"><img src="{{asset('storage').'/' . $imagen[0]->name}}" class="rounded mx-auto d-block img-fluid" alt="{{$imagen[0]->name}}"></div>
        <div class="col-sm-5 offset-sm-2 col-md-3 offset-md-0">
        <ol class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Nombre:</div>
      {{$propiedad[0]->name}}
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Locación</div>
      {{$propiedad[0]->location}}
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Precio</div>
      {{$propiedad[0]->price}}
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Descripción:</div>
      {{$propiedad[0]->description}}
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Terreno:</div>
      {{$propiedad[0]->terrain}}
    </div>
  </li>
</ol>
<br><br>
    <a href="/PruebaPDF/{{$propiedad[0]->idP}}" class="btn btn-light b1 btn-lg">GenerarPDF</a>
        </div>
    </div>
</div>
<br><br><br>
@include ('footer')
</body>