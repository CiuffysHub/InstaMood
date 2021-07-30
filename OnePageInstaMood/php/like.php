<?php
session_start();

require_once('config.php');

$username = $_SESSION['userlogin'];
$pictureID = $_POST['pictureID'];

$sql = "SELECT COUNT(1) FROM likes WHERE user=? AND pictureID=? LIMIT 1";
$query = $db->prepare($sql);
$query->bind_param("ss", $username,$pictureID);
$query->execute();
$query->bind_result($count);
$query->fetch();
$query->close();

if ($count==0) {

	$sql = "INSERT INTO likes(user,pictureID) VALUES( ? , ? )";
	$query = $db->prepare($sql);
	$query->bind_param("ss", $username,$pictureID);
	$query->execute();
	$query->close();

}
else{
	$sql = "DELETE FROM likes WHERE user = ? AND pictureID = ?";
	$query = $db->prepare($sql);
	$query->bind_param("ss", $username,$pictureID);
	$query->execute();
	$query->close();

}

$sql1 = "SELECT COUNT(pictureID) FROM likes WHERE pictureID = ?";
$query1 = $db->prepare($sql1);
$query1->bind_param("s", $pictureID);
$query1->execute();
$query1->bind_result($likes);
$query1->fetch();

echo $likes;
?>