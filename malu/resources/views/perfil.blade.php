<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/924c212a80.js" crossorigin="anonymous"></script>

    <title>Terracota Hábitat (Mi perfil) </title>

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
    <h2 class="text-center" style="font-family: 'Open Sans Condensed', sans-serif;">Mi perfil</h2>
    <br>
    <div class="container">
    <div class="card text-center">
  <div class="card-header"><i class="bi bi-person-circle far fa-user-circle" style="font-size: 45px;"></i></i></div>
  <div class="card-body">
    <h5 class="card-title">Hola {{Auth::user()->nick}}</h5>
  
    <ul class="list-group" >
    <li class="list-group-item">Nombre: {{Auth::user()->name}}</li>
    <li class="list-group-item">Usuario: {{Auth::user()->nick}}</li>
    <li class="list-group-item">Email: {{Auth::user()->email}}</li>
    <li class="list-group-item"><a href="{{ route('password.request') }}" class="link-info">Cambiar contraseña</a></li>
  </ul>
  <br>
       <button type="button" class="btn btn-primary btnModal" id="{{Auth::user()->id}}" data-bs-toggle="modal" data-bs-target="#Modal">Editar</button>
  </div>
  <div class="card-footer text-muted">
    ¡Cambia tu información cuando necesites!
  </div>
</div>
    </div>

    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edición de datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/updateUsr" method="POST">
                <div class="modal-body">
                @csrf
                 <input type="hidden" name="identificador" id="identificador" value="{{Auth::user()->id}}">
                        <label for="">Nombre:</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{Auth::user()->name}}">                    
                        <br>

                        <label for="">Correo electrónico</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{Auth::user()->email}}" >

                        <br>
                        <label for="">Nick</label>
                            <input class="form-control" type="text" name="nick" id="nick" value="{{Auth::user()->nick}}" >

                        <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
            </div>
        </div>
        </div>

        <script>
            $(document).ready(function(){
                var myModal = document.getElementById('Modal');
            myModal.addEventListener('shown.bs.modal', function () {})
            });
        </script>
            
    </div>


    @include ('footer')
</body>