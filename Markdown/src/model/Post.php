<?php  
 namespace Dante\Markdown\model;

 class Post {

    public function __construct( private string $file )
    {
       $this->getFileName();
    }

    public function getContent(){
        $stream = fopen('url', 'r');
        $content = fread($stream, filesize('url'));

    }

    public function getFileName(){
        echo __DIR__;
    }

 }