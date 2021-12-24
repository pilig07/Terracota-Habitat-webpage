<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/924c212a80.js" crossorigin="anonymous"></script>

    <title>Terracota Hábitat (Añadir propiedad) </title>

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
    <h1 class="display-3 text-center">Agrega una nueva propiedad al catálogo</h1>
    </div>
    
    <div class="container">
    <div class="card mx-auto" style="width: 50rem;">
            <div class="card-header">
                Ingresa los datos de la propiedad
            </div>
            <div class="card-body">
                <p class="card-text">
                <form action="/guardaProp" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Título:</label>
                        <input type="text" class="form-control" id="name" name="name" require>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Ubicación:</label>
                        <input type="text" class="form-control" id="location" name="location" require>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="price" name="price" require>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" placeholder="Escribe los detalles" id="floatingTextarea" id="description" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="terrain" class="form-label">Terreno</label>
                        <input type="text" class="form-control" id="terrain" name="terrain" require>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mx-auto text-center">Añadir</button>
                </form>
                </p>
                <div class="card-footer text-muted">Después de añadir la información podrás añadir una imagen!</div>
            </div>
        </div>
    </div>
    @include ('footer')
    <script>
    $(document).ready(function(){
        setTimeout(function() {$('#successMessage').fadeOut('fast');}, 5000);
    });
</script>
</body>
</html>