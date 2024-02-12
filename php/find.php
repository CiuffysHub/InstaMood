<?php
session_start();

require_once('config.php');

$follower = $_SESSION['userlogin'];

$sql = "SELECT email FROM users where email != ? and email not in( SELECT following FROM follow WHERE follower = ?)";
$query = $db->prepare($sql);
$query->bind_param("ss", $follower,$follower);
$query->execute();
$query->bind_result($result);

$a="[";
$query->fetch();
$a = $a."\"".$result."\"";
while ($query->fetch()) { 
$a = $a.",\"".$result."\"";
}
$a = $a."]";
$query->close();

echo $a;

?>