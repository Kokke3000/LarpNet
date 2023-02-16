<?php
//Checking if user has a valid login
session_start();
if (isset($_SESSION['Username'])) {
    
} else {
    header('Location: ../../LoginPage/login.html');
}

$SendTo = $_POST['RecieverName'];

//Establishing connection to database
$conn = new mysqli("192.168.1.135", "root", "TietokannanSalis1234", "Players");

//Selecting all messages and printing them out
$stmt = $conn->prepare("SELECT `Credits` FROM `Player_Data` WHERE BINARY `InGameName` = ?");
$stmt->bind_param('s', $SendTo);
$stmt->execute();
$result = $stmt->get_result();

if(mysqli_num_rows($result) > 0) {
    $stmt = $conn->prepare("UPDATE `Player_Data` SET `Credits` = `Credits` -  ? WHERE BINARY `InGameName` = ?");
    $stmt->bind_param('is', $_SESSION['Username']);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>
