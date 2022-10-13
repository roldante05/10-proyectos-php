<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="src/components/main.css">
<?php

use Dante\Comentarios\models\Comment;

$params = explode('&', $_SERVER['QUERY_STRING']);

$url = '';

foreach($params as $param){
    if(strpos($param, 'view=') === 0){
        $url = explode('=', $param)[1];
    }
}
   
if(isset($_POST['username']) && isset($_POST['text']) && $url !== ''){
    $username = $_POST['username'];
    $text = $_POST['text'];

    $comment = new Comment($username, $text, $url);
    $comment->save();
}



?>
<div class=" comments-container">
    <div class="row">

        <form action="?view=page1" method="POST">
            <input class="form-control" type="text" name="username" required placeholder="Tu usuario...">
            
            <textarea class="form-control" name="text" id="" cols="30" rows="5" required placeholder="comentario"></textarea>
            
            <input class="btn btn-primary" type="submit" class="button" value="Publicar comentario"/>
        </form>
    </div>
    </div>

    <div class="container-fluid comments">
        <?php
      $comments = Comment::getAll($url);

        foreach ($comments as $comment) {
        ?>
            <div class="comment shadow">
                <p class="username my-1"><?php echo $comment->getUsername() ?></p>
                <div class="text text-center py-4"><?php echo $comment->getText() ?></div>
                <div class="date text-end my-2"><?php echo $comment->getDate() ?></div>
            </div>
        <?php
        }
        ?>
    </div>
