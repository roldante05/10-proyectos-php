<?php 
 use Dante\Markdown\model\Post;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>

<h1>Bienvenido a mi blog</h1>
    <?php
    
    $posts = Post::getPosts();

    foreach($posts as $post){
     echo "<div><a href='{$post->getUrl()}'> {$post->getPostName()} </a></div>";
    }
    ?>
</body>
</html>