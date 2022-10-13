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
<div class="comments-container">
    <form action="" method="POST">
        <input type="text" name="username" required placeholder="Tu username...">

        <textarea name="text" id="" cols="30" rows="10" required placeholder="comentario"></textarea>

        <input type="submit" class="button" />
    </form>

    <div class="comments">
        <?php
      $comments = Comment::getAll($url);

        foreach ($comments as $comment) {
        ?>
            <div class="comment">
                <div class="username"><?php echo $comment->getUsername() ?></div>
                <div class="text"><?php echo $comment->getText() ?></div>
                <div class="date"><?php echo $comment->getDate() ?></div>
            </div>
        <?php
        }
        ?>
    </div>
</div>