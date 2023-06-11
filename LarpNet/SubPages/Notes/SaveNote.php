<?php
//Checking if user has a valid login
session_start();
if (isset($_SESSION['Username'])) {
    
} else {
    header('Location: ../../LoginPage/login.php');
}

//Including connection to the database
include "../../connection.php";


$note = $_POST['note'];
$owner = $_SESSION['Username'];
$timestamp = "5.8.347";

$stmt = $conn->prepare("INSERT INTO `Notes` (owner, note, timestamp)
VALUES(?, ?, ?)");
$stmt->bind_param('sss', $owner, $note, $timestamp);
$stmt->execute();
$conn->close();

header('Location: Notes.php');


?>