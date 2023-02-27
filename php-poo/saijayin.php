<?php 
// CONSTRUCTOR PROPERTY PROMOTION PERMITE UNA SINTAXY MAS CORTA DE DEFINIR
// LAS PROPIEDADES DE UNA CLASE EJ:

// public function __construct(public string $nombre, public int $nivel_pelea)
// {
// }

class Saijayin{ 

    public string $nombre;
    public string $clase = "Saijayin";
    public int $nivel_pelea;

    public function __construct($nombre, $nivel_pelea)
    {
        $this->nombre = $nombre; 
        $this->nivel_pelea = $nivel_pelea; 
    }


public function Saludar($texto = 'Hola soy ') {
    return $texto . $this->nombre; 

}

public function NivelDePelea(){
return "<h2>" . $this->nombre. " tiene un nivel de pelea de ". $this->nivel_pelea . " y pertence 
a la clase " . $this->clase . "</h2>";
}

}

// HERENCIA ENTRE CLASES PADRE E HIJA USANDO "EXTENDS" 
// CLASE HIJA            CLASE PADRE
class SuperSaijayin extends Saijayin{
    public string $clase = "Super Saijayin";

    public function Transformacion(){
        if ($this->nivel_pelea >= 950) {
            $texto = $this->nombre." se transformo en ". $this->clase;
        } else {
            $texto = $this->nombre." No se transformo en ". $this->clase;
        }

        return $texto;
    }

}

$goku = new SuperSaijayin("Goku", 1000);
echo  $goku->NivelDePelea();

echo "<br><br> ";

$vegeta = new SuperSaijayin("Vegeta", 990);
echo $vegeta->NivelDePelea("Soy el principe ");


echo "<br><br> ";


$gohan = new SuperSaijayin("Gohan", 850);
echo  $gohan->NivelDePelea();

echo  $goku->Transformacion();
echo "<br><br> ";
echo  $vegeta->Transformacion();
echo "<br><br> ";
echo  $gohan->Transformacion();
echo "<br><br> ";




?>