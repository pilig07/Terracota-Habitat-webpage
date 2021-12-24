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

    @if(Auth::user()->idRol==2)
        @include ('layoutAdmin')
    @endif
    <br>
    <br>
    <br>
    <br>
    <h2 class="text-center" style="font-family: 'Open Sans Condensed', sans-serif;">Registro de usuarios</h2>
    <br>
<br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nick</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Modificar Info</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $u)
                <tr>
                    <td scope="row">{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->nick}}</td>
                    @if($u->idRol== 1)
                    <td>Usuario</td>
                    <input type="hidden" id="idRol_{{$u->id}}" value="1">
                    @else
                    <td>Administrador</td>
                    <input type="hidden" id="idRol_{{$u->id}}" value="2">
                    @endif
                    <input type="hidden" id="name_{{$u->id}}" value="{{$u->name}}">
                    <input type="hidden" id="email_{{$u->id}}" value="{{$u->email}}">
                    <input type="hidden" id="nick_{{$u->id}}" value="{{$u->nick}}">
                    <input type="hidden" id="idd" value="{{$u->id}}">
                    <td><button type="button" class="btn btn-primary btnModal" id="{{$u->id}}" data-bs-toggle="modal" data-bs-target="#Modal">
                        Editar
                    </button></td>
                    <td><a href="/eliminar/{{$u->id}}">Eliminar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edición de usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/guardausr" method="POST">
                <div class="modal-body">
                @csrf
                        <input type="hidden" name="identificador"id="id2" value="0">
                        <label for="">Nombre:</label>
                            <input class="form-control" type="text" name="name" id="name" value="0">                    
                        <br>

                        <label for="">Correo electrónico</label>
                            <input class="form-control" type="text" name="email" id="email" value="0" >

                        <br>
                        <label for="">Nick</label>
                            <input class="form-control" type="text" name="nick" id="nick" value="0" >

                        <br>
                        <label for="">Rol</label>
                        <select class="form-select" name="idRol" id="idRol" required>
                            <option value="1">Usuario</option>
                            <option value="2">Administrador</option>
                        </select>
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
           // $('.btnModal').click(ola);
            $(".btnModal").click(function(){
                var id = this.id;
                name = $("#name_" + id).val();
                email = $("#email_" + id).val();
                nick = $("#nick_" + id).val();
                idRol = $("#idRol_" + id).val();
        
                $("#id2").attr('value',id);
                $("#name").attr('value',name);
                $("#idRol option[value='"+idRol + "']").attr("selected",true);
                $("#nick").attr('value',nick);
                $("#email").attr('value',email);
            });
            });
        </script>
            
    </div>


    @include ('footer')
</body>