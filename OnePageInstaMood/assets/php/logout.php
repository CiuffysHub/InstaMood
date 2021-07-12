<?php

session_start();
session_destroy();
header('Location: /assets/php/login_page.php');

?>