<?php
session_start();

require_once('config.php');

$username = $_SESSION['userlogin'];

//$sql = "SELECT following, pictureID FROM sharings JOIN follow ON following=user WHERE follower = ?";
$sql = "SELECT follow.following,sharings.pictureID,COUNT(likes.user) FROM follow,sharings LEFT JOIN likes ON likes.pictureID = sharings.pictureID  where follow.following = sharings.user AND follower=? GROUP BY follow.following,sharings.pictureID,likes.user";
$query = $db->prepare($sql);
$query->bind_param("s", $username);
$query->execute();
$query->bind_result($following,$pictureID,$likes);

$a = array();

while ($query->fetch()) { 
	$b=array("user"=>$following,"pictureID"=>$pictureID,"likes"=>$likes);
	array_push($a, $b);
}
$query->close();

echo json_encode($a);

?>
