<?php 
session_start(); // Iniciar la sesión
// Si el usuario desea cerrar la sesión

    // Eliminar todas las variables de sesión
    session_unset();
    // Destruir la sesión
    session_destroy();
    // Redirigir al usuario a la página de inicio de sesión
    header("Location: ?view=bienvenido");
    exit();


?>