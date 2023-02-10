<?php
// phpinfo();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/resources/main.css">
    <title>Inicio</title>
</head>

<body>

    <header>
        <div class="container">

            <div class="container-pri">
                <div>
                    <h1 class="container-menu">Inicio</h1>

                    <form action="?view=upload" method="POST" enctype="multipart/form-data">
                        <p>Sube una imagen</p>
                        <input type="file" name="file" id="file">
                        <div>
                            <!-- <input type="submit" value="Subir" class="btn"> -->
                        </div>
                    </form>
                </div>
            </div>

            <div id="files-container"></div>

            <h2>
                <a href="#menu">Mirar fotos</a>
            </h2>

            <div class="popover" id="menu">
                <div class='content'>
                    <a href="#" class="close"></a>
                    <div class='nav'>

                        <ul class='nav_list'>

                            <?php

                            $arrFiles = scandir(__DIR__ . '/img/thumbnails');

                            foreach ($arrFiles as $file)
                             {
                                if (strlen($file)  > 2  ) {
                                    
                                    echo '<div class="nav_list_item file-item" ><li><a href="src/img/original/' . $file . '"><img src="src/img/thumbnails/' . $file . '" /></a></li></div>';
                                    
                                   
                               
                            }}
                            ?>
                           
                           </ul>
                        <ul class='nav_list'>
                        <div class='nav_list_item'>
                            <li><a href="?view=gallery">Ir a galeria</a></li>
                        </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <script src="src/resources/app.js"></script>
</body>

</html>