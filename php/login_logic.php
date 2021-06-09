<?php
session_start();
require_once('config.php');


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT COUNT(1) FROM users WHERE email = ? AND password = ? LIMIT 1";

$query = $db->prepare($sql);
$query->bind_param("ss", $username, $password);
$query->execute();
$query->bind_result($count);
$query->fetch();

if ($count==1){
	echo "SUCCESS";
}
else{
	echo "ERROR";
}