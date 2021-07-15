<?php
session_start();

require_once('config.php');

$pictureID = $_POST['pictureID'];

$sql = "SELECT COUNT(1) FROM likes WHERE pictureID=? LIMIT 1";
$query = $db->prepare($sql);
$query->bind_param("s", $pictureID);
$query->execute();
$query->bind_result($count);
$query->fetch();
$query->close();

echo $count;
?>