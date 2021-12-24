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

        .texto1 {
            color: white;
            font-family: 'Lato', sans-serif;
            position: relative;
            font-size: 60px;
            top: -550px;
            width: 600px;
            left: 70px;
        }

        .desc1 {
            color: white;
            font-family: 'Montserrat', sans-serif;
            position: relative;
            top: -530px;
            left: 70px;
        }

        .b1 {
            position: relative;
            top: -530px;
            left: 180px;
        }

        .icon {
            color: #2f4858;
            font-size: 60px;
            text-align: center;
        }
    </style>
    <link rel="stylt/csesheet" type="texs" href="estilos.css">
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

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    {{ __('You are logged in!') }}

    @if ($message = Session::get('success'))
    <div id="successMessage" class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="container border-bottom" style="height:870px">
        <img src="img1.jpg" class="img-fluid" alt="entrega de llaves">
        <div class="texto1">ENCUENTRA EL LUGAR PERFECTO PARA VIVIR</div>
        <p class="fw-light desc1">Renta,Venta de inmuebles y amueblados</p>
        <a href="/catalogo" class="btn btn-secondary b1 btn-lg">Ver catálogo</a>
    </div>
    <br>
    <br>
    <div class="container-fluid border-bottom">
        <br>
        <h3 class="h3 mx-auto" style="text-align:center">Conoce nuestros beneficios</h3>
        <br>
        <br>
        <div class="card-group">
            <div class="card text-center border border-2 rounded-3 ml-1" style="width: 18rem;border: 1px #2b9720 solid">
                <div class="card-header">
                    <h5 class="card-title titulo h2">Propiedades en venta</h5>
                </div>
                <div class="card-body">
                    <i class="fas fa-home icon"></i>
                    <br>
                    <p class="card-text">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    </p>
                </div>
            </div>
            <div class="card text-center border border-2 rounded-3 ml-1" style="width: 18rem;border: 1px #2b9720 solid">
                <div class="card-header">
                    <h5 class="card-title titulo h2">Amueblados</h5>
                </div>
                <div class="card-body">
                    <i class="fas fa-chair icon"></i>
                    <br>
                    <p class="card-text">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    </p>
                </div>
            </div>
            <div class="card text-center border border-2 rounded-3 ml-1" style="width: 18rem;border: 1px #2b9720 solid">
                <div class="card-header">
                    <h5 class="card-title titulo h2">Busca tu nueva propiedad</h5>
                </div>
                <div class="card-body">
                    <i class="fas fa-building icon"></i>
                    <br>
                    <p class="card-text">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    </p>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    <div class="container-fluid">
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Nosotros encontraremos tú lugar perfecto</h1>
        </section>
        <div class="album py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="casa1.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="casa 1">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Detalles en catálogo</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="casa2.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="casa 1">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Detalles en catálogo</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="casa3.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="casa 1">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Detalles en catálogo</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="casa4.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="casa 1">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Detalles en catálogo</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="casa5.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="casa 1">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Detalles en catálogo</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="casa6.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="casa 1">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Detalles en catálogo</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br>

                @include ('footer')
                <script>
                    $(document).ready(function() {
                        setTimeout(function() {
                            $('#successMessage').fadeOut('fast');
                        }, 5000);
                    });
                </script>
</body>
</html>