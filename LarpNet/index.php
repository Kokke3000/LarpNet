<?php


session_start();
$_SESSION['InvalidLogin'] = 0;
header('Location: /LoginPage/login.php');


?>