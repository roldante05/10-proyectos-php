<?php
// Verificamos que se haya enviado un formulario por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Creamos un array con los datos del formulario
    $datos = array(
        'nombre' => $_POST['txtNombre'],
        'email' => $_POST['txtEmail'],
        'contraseña' => $_POST['txtPassword']
    );

    $mensaje = array(
        "verde" => "Registrado exitosamente!",
        "rojo" => "Llene de nuevo los campos!"
    );

    $alerta;

    if($datos['nombre'] != '' && $datos['email'] != '' && $datos['contrasena'] != '' ){
    // Convertimos el array a JSON
    $datos_json = json_encode($datos);

    // Guardamos el JSON en un archivo
    file_put_contents('datos.json', $datos_json);

    // Redirigimos al usuario a una página de éxito
       $alerta =  "<div class='alert alert-success' role='alert'>". $mensaje['verde'] ."</div>";
        
    } else {
        $alerta =  "<div class='alert alert-danger' role='alert'>". $mensaje['rojo'] ."</div>";
      
    }

}
