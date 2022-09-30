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
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="src/views/resources/styles.css">
</head>

<body>
<?php require 'src/views/resources/navbar.php' ?>
    <h1 class="my-2 text-center" >Create</h1>


    <div class="container">
    <form class="row" action="?view=create" method="POST">
            <input class="col-sm-12" name="title" type="text" placeholder="Title" />
            <textarea class="col-sm-12 my-4" name="content"></textarea>
            <input class="btn btn-primary  col-sm-12" type="submit" value="Create note">
            
        </form>
    </div>
</body>

</html>