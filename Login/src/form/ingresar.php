<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="src/resources/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Iniciar Sesión</title>
</head>
<body>
    
    <div class="abs-center bg-form">

        <div class="my-3">
            <h1>Bienvenido al sistema</h1>
        </div>
        <form action="?form=validar" method="POST" class="border p-3 form">
            <div class="form-group mb-3">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="txtEmail" id="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password">Contraseña</label>
                <input type="password" name="txtPassword" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
        <p>
            ¿No tenes cuenta?
            <a class="mt-3" type="button" href="?form=registrar" >
                Registrate aca!
            </a>
        </p>
    </div>

</body>
</html>