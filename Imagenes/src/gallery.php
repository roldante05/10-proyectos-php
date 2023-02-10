<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/resources/main.css">
</head>

<body>

<div class="nav-galeria" >
    <a href="?view=home" class="btn-galeria" > Ir a inicio </a>
    <a ></a>
</div>
<h1 class="container-menu title-galeria">Galeria</h1>
    
    <div class="container-galeria">
        <?php

        $arrFiles = scandir(__DIR__ . '/img/thumbnails');

        foreach ($arrFiles as $file) {
            if (strlen($file) > 2) {
                echo '<div class="nav_list_item  file-item" ><a href="src/img/original/' . $file . '"><img src="src/img/thumbnails/' . $file . '" /></a></div>';
            }
        }

        ?>
    </div>
</body>

</html>