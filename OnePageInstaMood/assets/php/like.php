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

	echo "LIKED";

}
else{
	echo "ALREADY LIKED";
}
?>