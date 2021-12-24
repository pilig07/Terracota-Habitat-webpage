<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Terracota Hábitat (Registro de usuario) </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

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

</head>

<body>
    @include ('layout')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <p class="h1">Hola! Bienvenido</p>
        <div class="card">
            <div class="card-header">
                Ingresa tus datos
            </div>
            <br>
            <div class="card-body">
                <p class="card-text">
                <form action="/guardaUsuario" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" require>
                    </div>
                    <div class="mb-3">
                        <label for="Usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="Usuario" name="Usuario" require>
                    </div>
                    <div class="mb-3">
                        <label for="Contraseña" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="Pwd" name="Pwd" require>
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" name="Email" require>
                    </div>
                    <div class="mb-3">
                        <label for="Indicio" class="form-label">Indicio de contraseña</label>
                        <input type="text" class="form-control" id="Indicio" name="Indicio" require>
                    </div>
                    <input type="hidden" name="idRol" id="idRol" value="1">
                    <br>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
                </p>
            </div>
        </div>

    </div>
    @include ('footer');
</body>

</html>