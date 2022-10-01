<?php 

namespace Dante\Notas\models;

use PDO;
use Dante\Notas\lib\Database;

class Note extends Database {

    private string $uuid;

    public function __construct(private string $title, private string $content)
    {
        parent::__construct();
        $this->uuid =  uniqid() ;
    }

    public function save()
    {
        $query = $this->connect()->prepare("INSERT INTO notes (uuid, title, content, updated) VALUES (:uuid, :title, :content, NOW())");
         $query->execute(['uuid' => $this->getUUID(), 'title' => $this->getTitle(), 'content' => $this->getContent()]);
    }

    public function update()
    {
        $query = $this->connect()->prepare("UPDATE notes SET title = :title, content = :content, updated = NOW() WHERE uuid = :uuid");
         $query->execute(['uuid' => $this->uuid, 'title' => $this->title, 'content' => $this->content]);
    }
  
public static function get($uuid){

$db = new Database();
$query = $db->connect()->prepare("SELECT * FROM notes WHERE uuid = :uuid");
$query->execute(['uuid' => $uuid]);

$note = Note::createFromArray($query->fetch(PDO::FETCH_ASSOC));
return $note;
}

public static function createFromArray($arr):Note{
    $note = new Note($arr['title'], $arr['content']);
    $note->setUUID($arr['uuid']);

    return $note;
}

public static function getAll(){
    $notes = [];
    $db = new Database();
$query = $db->connect()->query("SELECT * FROM notes");

while($r = $query->fetch(PDO::FETCH_ASSOC)){

    $note = Note::createFromArray($r);
    array_push($notes, $note);
    
}

return $notes;
}



    public function setTitle($value)
    {
        $this->title = $value;
    }

    public function getTitle(): string
    {
        return $this->title;
    }


    public function getContent(): string
    {
        return $this->content;
    }
    public function setContent($value)
    {
        $this->content = $value;
    }

    public function getUUID()
    {
        return $this->uuid;
    }

    public function setUUID($value)
    {
        $this->uuid = $value;
    }



}


?>