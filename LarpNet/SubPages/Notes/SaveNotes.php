<?php
//Checking if user has a valid login
session_start();
if (isset($_SESSION['Username'])) {
    
} else {
    header('Location: ../../LoginPage/login.php');
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$Notes = $_POST['NewNotes'];

//Including connection to the database
include "../../connection.php";

if ($conn->connect_error) {
    die('Conection Failed: '.$conn->connect_error);
} else {


    $stmt = $conn->prepare("UPDATE `Notes` SET `PlayersNotes` = ? WHERE BINARY `InGameName` = ?");
    $stmt->bind_param('ss', $Notes, $_SESSION['Username']);
    $stmt->execute();

}
?>
