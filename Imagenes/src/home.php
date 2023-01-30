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
    <h1>Inicio</h1>

    <form action="?view=upload" method="POST" enctype="multipart/form-data">
        <label for="file">Subir imagen</label>
        <input type="file" name="file" id="file">
        <br>
        <input type="submit" value="Subir">
    </form>

    <div id="files-container"></div>



    <script src="src/resources/app.js"></script>
</body>

</html>