<?php

session_start();
echo $_SESSION['userlogin'];
if(isset($_SESSION['userlogin'])){
	$img = $_POST['imgBase64'];
	$fileName = $_POST['id'];
	var_dump($img);
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$fileData = base64_decode($img);
	//saving
	echo(file_put_contents("../../users/".$_SESSION['userlogin']."/".$fileName, $fileData));
}

?>