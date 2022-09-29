<?php

use Dante\Notas\models\Note;

if (count($_POST) > 0) {

     $title = isset($_POST['title']) ? $_POST['title'] : 'title de prueba';
     $content = isset($_POST['content']) ? $_POST['content'] : 'content de prueba';

    $note = new Note($title, $content);
    $note ->save();

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <!-- <link rel="stylesheet" href="src/views/resources/main.css"> -->
</head>

<body>
<?php require 'src/views/resources/navbar.php' ?>
    <h1>Create</h1>

    <form action="?view=create" method="POST">
        <input name="title" type="text" placeholder="Title" />
        <textarea name="content"></textarea>
        <input type="submit" value="Create note">

    </form>
</body>

</html>