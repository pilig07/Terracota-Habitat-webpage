<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/924c212a80.js" crossorigin="anonymous"></script>

    <title>Terracota Hábitat (Añadir imagen a propiedad) </title>

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
   
  @include ('layoutAdmin')
  <br>
  <br>
  <br>
  @if ($message = Session::get('success'))
<div id="successMessage" class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif 
 <br>
    <div class="container">
    <h1 class="display-3 text-center">Agrega la imagen de tu propiedad!</h1>
    </div>
    
    <div class="container">
    <div class="card mx-auto" style="width: 50rem;">
            <div class="card-header">
                Ingresa la imagen de tu propiedad
            </div>
            <div class="card-body">
                <p class="card-text">
                <form action="/guardaImg" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Título:</label>
                        <input type="text" class="form-control" id="name" name="name" require>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" require>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="idP" name="idP" value="{{$idPropiedad}}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Agregar imagen</button>
                </form>
                </p>
            </div>
        </div>
    </div>
    @include ('footer')
    <script>
    $(document).ready(function(){
        setTimeout(function() {$('#successMessage').fadeOut('fast');}, 3000);
    });
</script>
</body>
</html>