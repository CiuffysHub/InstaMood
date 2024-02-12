<?php

$db_host = '[IP_ADDRESS_HERE]';
$db_user = '[USERNAME_HERE]';
$db_pass = '[PASSWORD_HERE]';
$db_name = '[DATABASE_NAME_HERE]';

$db = new mysqli($db_host,$db_user,$db_pass,$db_name);

// Check connection
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db -> connect_error;
  exit();
}
