<?php

$img = $_POST['imgBase64'];
$fileName = $_POST['id'];
var_dump($img);
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);
//saving
file_put_contents($fileName, $fileData);


?>