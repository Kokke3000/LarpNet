<?php
//Checking if user has a valid login
session_start();
if (empty($_SESSION['Username'])) {
    header('Location: ../../index.php');
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);

unset($_SESSION['SelectedCrew']);

header('Location: CrewLog.php')
?>