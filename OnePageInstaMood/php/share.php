<?php
session_start();

require_once('config.php');

$username = $_SESSION['userlogin'];

$sql = "INSERT INTO sharings(user,pictureID) VALUES( ? , ? )";
$query = $db->prepare($sql);
$query->bind_param("ss", $username,$_POST['pictureID']);
$query->execute();
$query->close();

?>