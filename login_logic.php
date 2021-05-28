<?php

require_once('config.php');

$sql = "SELECT * FROM users";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([]);

if($result){
	echo "success";
}

else{
	echo "problems happened";
}
