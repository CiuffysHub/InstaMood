<?php
session_start();
require_once('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists
	if ($user['username'] === $username) {
  		array_push($errors, "Username already exists");
}
if (count($errors) == 0) {

	$sql = "INSERT INTO users(email,password) VALUES(?,?)";
	$stmtselect = $db->prepare($sql);
	$stmtselect->bind_param("ss", $username, $password);

	$result = $stmtselect->execute();
	


}
else{
	alert("This username is already taken")
}