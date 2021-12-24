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

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .container {
            max-width: 960px;
        }

        /*
 * Custom translucent site header
 */

        .site-header {
            background-color: rgba(0, 0, 0, .85);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            backdrop-filter: saturate(180%) blur(20px);
        }

        .site-header a {
            color: #8e8e8e;
            transition: color .15s ease-in-out;
        }

        .site-header a:hover {
            color: #fff;
            text-decoration: none;
        }

        .flex-equal>* {
            flex: 1;
        }

        @media (min-width: 768px) {
            .flex-md-equal>* {
                flex: 1;
            }
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
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">¿Quiénes somos?</h1>
            <p class="lead fw-normal">Nosotros somos tu inmobiliaria de confianza donde te ofrecemos Compra-Venta,Renta,Casas,Departamentos, Locales y Renta de casas amuebladas</p>
        </div>
    </div>
    <div class="b-example-divider"></div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Encontraremos el lugar perfecto para ti</h2>
                <p class="lead">Con nuestro amplio catálogo de propiedades, la locación no será un problema</p>
            </div>
        </div>
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">¿Te preocupa el presupuesto?</h2>
                <p class="lead">Tranquilo... Tenemos muchas opciones para ti,nos adapatamos a tu presupuesto</p>
            </div>
        </div>
    </div>
    <div class="b-example-divider"></div>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Nuestra Historia</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Somos un pequeño grupo de agentes que desde hace 10 años nos hemos encaragdo de encontrar el lugar perfecto para que vivas ya se de manera permanente o temporal, todo esto dentro del estado de San Luís Potosí.</p>
        </div>
    </div>
    <br>
    <br>
    @include ('footer')
</body>