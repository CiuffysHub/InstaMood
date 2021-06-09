<?php
session_start();
require_once('config.php');

echo "in register_logic";

$username = $_POST['username'];
$password = $_POST['password'];

$data = array($username);
$sql = "SELECT * FROM users WHERE email=? LIMIT 1";
$stmtselect = $db->prepare($sql);
$stmtselect->execute($data);
$rows_number = $stmtselect->fetchColumn();

if ($rows_number==0) {

	$sql = "INSERT INTO users(email,password) VALUES(?,?)";
	$data = array($username,$password);
	$stmtselect = $db->prepare($sql);
	$stmtselect->execute($data);

}
else{
	echo "ERROR";
}
?>