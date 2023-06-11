<?php
//Checking if user has a valid login
session_start();
if (empty($_SESSION['Username'])) {
    header('Location: ../../index.php');
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);
//Including the connection to the database
include("../../connection.php");

$servicename = "Messenger";
$stmt = $conn->prepare("SELECT * FROM `Disabled_Systems` WHERE BINARY `SystemName` = ? AND `Status` = 'disabled'");
$stmt->bind_param('s', $servicename);
$stmt->execute();
$rows = mysqli_num_rows($stmt->get_result());
//If user with given name exists
if ($rows < 1) {

$user = $_SESSION['Username'];

    //Selecting all messages and printing them out
    $stmt = $conn->prepare("SELECT * FROM Messages");
    $stmt->execute();
    $result = $stmt->get_result();
    if ($_SESSION['Username'] == 'Sussy Baka') {
        echo "<p style='color: red'>Sorry, the sussy baka cannot chat</p>";
    } else {
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>";
                echo $row['sender'];
                echo ": ";
                echo $row['message'];
                echo "</p>";
            }
        } else {echo "There are no messages";}
    }

} else {echo "Error 420: Virus alert!";}
?>