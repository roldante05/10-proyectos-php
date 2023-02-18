<?php
session_start();
// Cargamos los datos del archivo JSON
if($_POST && isset($_POST)){
 $email = $_POST['txtEmail'];
 $clave = $_POST['txtPassword'];
    $datos_json = file_get_contents('datos.json');
    $datos = json_decode($datos_json, true);
    
    // Validamos los datos
    if ($clave == $datos['contrasena'] && $email == $datos['email']) {
        header("Location: ?view=inicio");
    } else {
        echo 'Contraseña u Email incorrectos';
    }
}
