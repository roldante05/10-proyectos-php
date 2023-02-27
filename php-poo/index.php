<?php 

require 'saijayin.php' ;


$goku = new Saijayin("Goku", 1000);
echo  $goku->Saludar();

echo "<br><br> ";

$vegeta = new Saijayin("Vegeta", 990);
echo $vegeta->Saludar("Soy el principe ");
