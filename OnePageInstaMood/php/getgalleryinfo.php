<?php
session_start();

require_once('config.php');

$username = $_SESSION['userlogin'];

$sql = "SELECT sharings.pictureID, sharings.timestamps, COUNT(likes.user) FROM sharings LEFT JOIN likes ON likes.pictureID = sharings.pictureID where sharings.user=? GROUP BY sharings.pictureID,sharings.timestamps,likes.user";
$query = $db->prepare($sql);
$query->bind_param("s", $username);
$query->execute();
$query->bind_result($pictureID, $timestamp,$likes);

$a = array();

while ($query->fetch()) { 
	$b=array("pictureID"=>$pictureID,"timestamp"=>$timestamp, "likes"=>$likes);
	array_push($a, $b);
}
$query->close();

echo json_encode($a);
?>

