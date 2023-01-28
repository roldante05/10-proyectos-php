<?php 

use Intervention\Image\ImageManager;

$fileName = uniqid() . '-' . $_FILES['file']['name'];
$tmpFile = $_FILES['file']['tmp_name'];

$manager = new ImageManager(['driver' => 'imagick']);

$img = $manager→make($tmpFile);

$img→save(__DIR__ . '/img/original/' . $fileName);

?>