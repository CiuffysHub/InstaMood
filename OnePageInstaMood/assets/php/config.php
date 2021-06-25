<?php

$db_host = '31.11.39.15';
$db_user = 'Sql1495400';
$db_pass = 'Al3ss106B3ll0!';
$db_name = 'Sql1495400_2';

$db = new mysqli($db_host,$db_user,$db_pass,$db_name);

// Check connection
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db -> connect_error;
  exit();
}
