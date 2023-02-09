<?php

use Dante\Gastos\model\Category;

if(isset($_POST['name'])){
  
  $name = $_POST['name'];
  
  if(!Category::exists($name)){
    $categoria = new Category($name);
    $categoria->save();
  }
}

$categorias = Category::getAll();

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/resources/main.css">
  <title>Crear Categoria</title>
</head>

<body>

<?php require 'src/resources/navbar.php' ?>

  <div class="container">
    <form action="" method="POST">
      <input type="text" name="name" placeholder="Nombra una categoria...">
      <input type="submit" value="Crear categoria">
    </form>
    <div class="categorias">
      <?php
      foreach ($categorias as $categoria) {
      ?>

        <div class="categoria">
          <?php echo $categoria->getName() ?>
        </div>

      <?php
      }
      ?>

    </div>
  </div>

</body>

</html>