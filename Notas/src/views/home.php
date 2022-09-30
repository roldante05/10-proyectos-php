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

    <?php foreach ($notes as $note ) { ?>
        <a href="?view=view&id=<?php echo $note->getUUID(); ?>">
            <div class="note-preview">
                <div class="title"> <?php echo $note->getTitle(). "<br>". $note->getContent() ; ?> </div>
            </div>
        </a>
        <?php   } ?>
</div>
    
</body>
</html>