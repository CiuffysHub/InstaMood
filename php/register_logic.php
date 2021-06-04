<?php
session_start();
require_once('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users(email,password) VALUES(?,?)";
$stmtselect = $db->prepare($sql);
$data = array($username, $password);
$result = $stmtselect->execute($data);