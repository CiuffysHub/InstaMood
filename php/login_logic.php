<?php
session_start();
require_once('config.php');


$username = $_POST['username'];
$password = $_POST['password'];

$data = array($username,$password);
$sql = "SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$stmtselect->execute($data);

if($stmtselect->rowCount()>0){

	$_SESSION['userlogin'] = $user;
	echo "1";

}

else{
	echo "problems happened";
}
