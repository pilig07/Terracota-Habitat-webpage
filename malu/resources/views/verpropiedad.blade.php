<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/924c212a80.js" crossorigin="anonymous"></script>

    <title>Terracota Hábitat (Editar propiedades) </title>

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
        @include ('layoutAdmin')
    <br>
    <br>
    <br>
    <br>
    <h2 class="text-center" style="font-family: 'Open Sans Condensed', sans-serif;">Registro de propiedades</h2>
    <br>
<br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Locación</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Terreno</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($propiedades as $p)
                <tr>
                    <td scope="row">{{$p->name}}</td>
                    <td>{{$p->location}}</td>
                    <td>{{$p->price}}</td>
                    <td>{{$p->description}}</td>
                    <td>{{$p->terrain}}</td>
                   
                    <input type="hidden" id="name_{{$p->idP}}" value="{{$p->name}}">
                    <input type="hidden" id="location_{{$p->idP}}" value="{{$p->location}}">
                    <input type="hidden" id="price_{{$p->idP}}" value="{{$p->price}}">
                    <input type="hidden" id="description_{{$p->idP}}" value="{{$p->description}}">
                    <input type="hidden" id="terrain_{{$p->idP}}" value="{{$p->terrain}}">
                    <input type="hidden" id="idd" value="{{$p->idP}}">
                    <td><button type="button" class="btn btn-primary btnModal" id="{{$p->idP}}" data-bs-toggle="modal" data-bs-target="#Modal">
                        Editar
                    </button></td>
                    <td><a href="/eliminarP/{{$p->idP}}">Eliminar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edición de datos de propiedad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/guardaP" method="POST">
                <div class="modal-body">
                @csrf
                <input type="hidden" name="identificador" id="id2" value="0">
                        <label for="">Nombre:</label>
                            <input class="form-control" type="text" name="name" id="name" value="0">                    
                        <br>

                        <label for="">Locación:</label>
                            <input class="form-control" type="text" name="location" id="location" value="0" >

                        <br>
                        <label for="">Precio:</label>
                            <input class="form-control" type="text" name="price" id="price" value="0" >

                        <br>
                        <label for="">Descripción:</label>
                        <input class="form-control" type="text" name="description" id="description" value="0" >
                        <br>
                        <label for="">Terreno:</label>
                            <input class="form-control" type="text" name="terrain" id="terrain" value="0" >
                        <br>
                       
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
                loc = $("#location_" + id).val();
                price = $("#price_" + id).val();
                description = $("#description_" + id).val();
                terrain = $("#terrain_" + id).val();
                
                $("#id2").attr('value',id);
                $("#name").attr('value',name);
                $("#location").attr('value',loc);
                $("#price").attr('value',price);
                $("#description").attr('value',description);
                $("#terrain").attr('value',terrain);
                
              
            });
            });
        </script>
            
    </div>


    @include ('footer')
</body>