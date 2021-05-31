<?php

$db_user = 'Sql1495400';
$db_pass = 'Al3ss106B3ll0!';
$db_name = 'Sql1495400_2';

$db = new PDO('mysql:host=31.11.39.15;dbname='.$db_name.';chartset=utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

