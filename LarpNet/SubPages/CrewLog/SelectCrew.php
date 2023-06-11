<?php
//Checking if user has a valid login
session_start();
if (empty($_SESSION['Username'])) {
    header('Location: ../../index.php');
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);

$_SESSION['SelectedCrew'] = $_POST['Name'];

header('Location: CrewLog.php')
?>