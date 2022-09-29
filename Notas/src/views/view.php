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
    <title>View</title>
</head>
<body>
<?php require 'src/views/resources/navbar.php' ?>
    <h1>View</h1>
    <form action="?view=view&id= <?php echo $note->getUUID(); ?> " method="POST">
        <input name="title" type="text" placeholder="Title" value="<?php echo $note->getTitle(); ?>" />
        <input type="hidden" name="id" value="<?php echo $note->getUUID(); ?>">
        <textarea name="content"> <?php echo $note->getContent(); ?> </textarea>
        <input type="submit" value="Update note">
    </form>
</body>
</html>