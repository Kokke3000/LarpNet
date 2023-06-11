<?php
//Checking if user has a valid login
session_start();
if (empty($_SESSION['Username'])) {
    header('Location: ../../index.php');
}


$enable = $_POST['value'];
$_SESSION['enable'] = $enable;
//Including connection to the database
include "../../connection.php";

//Enabling

$stmt = $conn->prepare("DELETE FROM Disabled_Systems WHERE SystemName = ?");
$stmt->bind_param('s', $enable);
$stmt->execute();




?>