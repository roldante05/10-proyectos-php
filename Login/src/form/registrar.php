<?php

require 'guardar.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/resources/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Registrarse</title>
</head>
<body>
    

    <div class="abs-center bg-form">

        <?php 
        if(isset($alerta)){

            echo $alerta; 
        }
        ?>
        <div class="my-3">
            <h1>Registrate</h1>
        </div>
        <form action="?form=registrar" method="POST" class="border p-3 form">
            <div class="form-group mb-3">
                <label for="email">Nombre y Apellido</label>
                <input type="text" name="txtNombre" id="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="email">Correo Electrónico</label>
                <input type="email" name="txtEmail" id="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password">Contraseña</label>
                <input type="password" name="txtPassword" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-danger">Registrarme</button>
        </form>
        <p>¿Ya tenes cuenta?

            <a class="mt-3" type="button" href="?form=ingresar">

                Ingresa aca!
            </a>
        </p>
    </div>

</body>
</html>