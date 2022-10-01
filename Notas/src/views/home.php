<?php
use Dante\Notas\models\Note;
$notes = Note::getAll();



    




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/views/resources/styles.css">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>HOME</title>
</head>
<body>
    <?php require 'src/views/resources/navbar.php' ?>
    <h1 class="text-center my-3">HOME</h1>
<div class="notes-container">

    <?php foreach ($notes as $note) {  ?>
       
        <p >
            <div class="note-preview">
                <h1 class="title text-center"> <?php echo $note->getTitle() ; ?>  </h1>
                <p> <?php echo $note->getContent() ; ?> </p>
                <div class="d-flex">
                    <a class="btn btn-primary text-white" href="?view=view&id=<?php echo $note->getUUID(); ?>">Editar</a>
                </div>
            </div>
            <?php   } ?> 
        </p>
</div>
</body>

</html>