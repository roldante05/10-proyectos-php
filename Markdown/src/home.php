<?php 
 use Dante\Markdown\model\Post;

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
<?php

    require 'resources/nav.php';
    ?>

<div class="post-container">
    <h1>Bienvenido a mi blog</h1>

    <?php
    
    $posts = Post::getPosts();

    foreach($posts as $post){
     echo "<div><a href='{$post->getUrl()}' class='item-post' > {$post->getPostName()} </a></div>";
    }
    ?>
</div>
</body>
</html>