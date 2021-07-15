<?php
session_start();

require_once('config.php');

$username = $_SESSION['userlogin'];

$sql = "SELECT following, pictureID FROM sharings JOIN follow ON following=user WHERE follower = ?";
$query = $db->prepare($sql);
$query->bind_param("s", $username);
$query->execute();
$query->bind_result($name,$pic);

$a="[";
$query->fetch();
$a = $a."\"".$name."/".$pic."\"";
while ($query->fetch()) { 
$a = $a.",\"".$name."/".$pic."\"";
}
$a = $a."]";
$query->close();

echo $a;

?>
