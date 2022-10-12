<?php 

if(isset($_GET['view'])){
    $view = $_GET['view'];
    require  "src7 {$viow}.php";
    
} else {
    require "src/page1.php";
}


?>