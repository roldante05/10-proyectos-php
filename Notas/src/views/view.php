<?php 

use Dante\Notas\models\Note;


if(count($_POST) > 0){

    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $uuid = $_POST['id'];

    $note = Note::get($uuid);

    $note->setTitle($title);
    $note->setContent($content);
    $note->update();

    $update = $_POST['update'];
    if(isset($update)){
        header('Location: http://localhost/proyectos-Php/Notas/?view=home');
    }
}
else if(isset($_GET['id'])){
    $note = Note::get($_GET['id']);
}else {
    header('Location: http://localhost/proyectos-Php/Notas/?view=home');
}


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
    <title>View</title>
</head>
<body>
<?php require 'src/views/resources/navbar.php' ?>
    <h1 class="my-2 text-center">View</h1>
    <div class="container">

        <form class="row" action="?view=view&id= <?php echo $note->getUUID(); ?> " method="POST">
            <input name="title" type="text" placeholder="Title" value="<?php echo $note->getTitle(); ?>" />
            <input class="col-sm-12" type="hidden" name="id" value="<?php echo $note->getUUID(); ?>">
            <textarea class="col-sm-12 my-4" name="content"> <?php echo $note->getContent(); ?></textarea>
            <input class="btn btn-secondary  col-sm-12" name="update" type="submit" value="Update note">
        </form>
    </div>
</body>
</html>