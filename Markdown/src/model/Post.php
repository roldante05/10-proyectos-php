<?php  
 
 namespace Dante\Markdown\model;
 use League\CommonMark\CommonMarkConverter;

 class Post {

    public function __construct( private string $file )
    {
       
    }

    public function getContent(){
        $converter = new CommonMarkConverter(['html_input' => 'escape', 'allow_unsafe_links' => false]);
        if(file_exists($this->getFileName())){

            $stream = fopen( $this->getFileName(), 'r');
            $content = fread($stream, filesize($this->getFileName()));
            return $converter->convert($content);
        } else {
             $this->getFileNameWhithout();
            if(file_exists($this->getFileName())){
                $stream = fopen( $this->getFileName(), 'r');
                $content = fread($stream, filesize($this->getFileName()));
                return $converter->convert($content);
            }
        }

        print_r('File does not exist');
    }

    public function getFileName(){
        $dir = Url::getRootPath();
        $fileName = "{$dir}/entries/{$this->file}";

        return $fileName;
    }

    public static function getPosts(){
        $posts = [];
        $files = scandir(Url::getRootPath() . '/entries');

        foreach($files as $file){
            if(strpos($file, 'md') > 0){
                $post = new Post($file);
                array_push($posts, $post);
                
            }
        }

        return $posts;
    }


    public function getUrl(){
        $url = substr($this->file, 0, strpos($this->file, 'md'));
        $title = str_replace(' ', '-', $url );
        $linkUrl = "http://localhost/Proyectos-Php/Markdown/?post={$title}" ;
        return $linkUrl;
    }

    private function getFileNameWhithout(){
        $title = str_replace('-', ' ', $this->file );
        $this->file = $title;

        return $title;
    }

    public function getPostName(){
        $title = $this->file;
        $title = str_replace('-', ' ', $title );
        $title = str_replace('.md', '', $title );

        return $title;
    }

 }