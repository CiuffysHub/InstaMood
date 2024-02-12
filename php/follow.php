<?php
session_start();

require_once('config.php');

$follower = $_SESSION['userlogin'];
$following = $_POST['following'];


$sql = "INSERT INTO follow(follower,following) VALUES( ? , ? )";
$query = $db->prepare($sql);
$query->bind_param("ss", $follower,$following);
$query->execute();
$query->close();



?>