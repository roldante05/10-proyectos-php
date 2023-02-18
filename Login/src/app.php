<?php 

if(isset($_GET['view'])){

    $view = $_GET['view'];
 require 'src/'. $view . '.php';

} else if(isset($_GET['form'])){

    $view = $_GET['form'];
    require 'src/form/'. $view . '.php';
    
} else {
    
 require 'src/bienvenido.php';
}
