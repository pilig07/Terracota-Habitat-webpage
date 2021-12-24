<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/924c212a80.js" crossorigin="anonymous"></script>

    <title>Terracota Hábitat (Administrar usuarios) </title>

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
    <h2 class="text-center" style="font-family: 'Open Sans Condensed', sans-serif;">Conoce nuestras ofertas</h2>
    <br>
    <br>
    <div class="album py-5 bg-light">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($propiedades as $p)
                <div class="col">
                    <div class="card shadow-sm">
                        @foreach($imagenes as $i)
                        
                        @if($p->idP == $i->idP)
                        <img src="{{asset('storage').'/' . $i->name}}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="{{$i->name}}">
                        @endif
                        @endforeach
                        <title>{{$p->name}}</title>

                        <div class="card-body">
                            <div class="card-text">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Locación: {{$p->location}}</li>
                                    <li class="list-group-item">Precio: {{$p->price}}</li>
                                    <li class="list-group-item">Terreno: {{$p->terrain}}</li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><a href="/propiedad/{{$p->idP}}" class="stretched-link">Más información</a></small>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>


    @include ('footer')
</body>