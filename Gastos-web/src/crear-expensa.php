<?php

use Dante\Gastos\model\Expense;
use Dante\Gastos\model\Category;

if(isset($_POST['title']) && isset($_POST['expense'] ) && isset($_POST['category_id']) ){
  
  $title = $_POST['title'];
  $expense = $_POST['expense'];
  $category_id = $_POST['category_id'];

    $expense = new Expense($title, $category_id, $expense);
    $expense->save();
  
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
  <title>Crear expensa</title>
</head>

<body>

  <div class="container-nav purple topBotomBordersIn">
    <a href="?view=home">INICIO</a>
    <a href="?view=crear-categoria">CREAR CATEGORIA</a>
    <a href="?view=crear-expensa">CREAR EXPENSA</a>
  </div>

  <div class="container">
    <form action="?view=crear-expensa" method="POST">
      <input type="text" name="title" placeholder="Nombra una expensa...">
      <input type="number" name="expense" placeholder="20.0">
      <select name="category_id" id="">
      <?php
      foreach ($categorias as $categoria) {
      ?>

        <option value='<?php echo $categoria->getId() ?>' >
          <?php echo $categoria->getName() ?>
      </option>

      <?php
      }
      ?>
      </select>
      <input type="submit" value="Crear expensa">
    </form>
    <div class="categorias">
    

    </div>
  </div>

</body>

</html>