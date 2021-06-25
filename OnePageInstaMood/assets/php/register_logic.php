<?php
session_start();

require_once('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT COUNT(1) FROM users WHERE email=? LIMIT 1";
$query = $db->prepare($sql);
$query->bind_param("s", $username);
$query->execute();
$query->bind_result($count);
$query->fetch();
$query->close();

if ($count==0) {

	$sql = "INSERT INTO users(email,password) VALUES( ? , ? )";
	$query = $db->prepare($sql);
	$query->bind_param("ss", $username,$password);
	$query->execute();
	$query->close();

}
else{
	echo "ERROR";
}
?>