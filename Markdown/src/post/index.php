<?php
 use Dante\Markdown\model\Post;

    if(isset($postName)){
      
        $post = new Post($postName . 'md');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <?php

    
        echo $post->getContent();
    
       
      
    ?>
</body>
</html>