<?php
//Checking if user has a valid login
session_start();
if (isset($_SESSION['Username'])) {
    
} else {
    header('Location: ../../LoginPage/login.php');
}
error_reporting(E_ERROR | E_WARNING | E_PARSE);

//Including connection to the database
include "../../connection.php";

$servicename = "Notepad";
$stmt = $conn->prepare("SELECT * FROM `Disabled_Systems` WHERE BINARY `SystemName` = ? AND `Status` = 'disabled'");
$stmt->bind_param('s', $servicename);
$stmt->execute();
$rows = mysqli_num_rows($stmt->get_result());
//If user with given name exists
if ($rows < 1) {

//Selecting all messages and printing them out
$stmt = $conn->prepare("SELECT * FROM `Notes` WHERE BINARY `owner` = ?");
$stmt->bind_param('s', $_SESSION['Username']);
$stmt->execute();
$result = $stmt->get_result();
if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>";
        echo $row['owner'];
        echo ": ";
        echo $row['note'];
        echo "<br>";
        echo "(";
        echo $row['timestamp'];
        echo ")";
        echo "</p>";
    }
} else {echo "You have no notes!";}

} else {echo "Error 420: Virus alert!";}
?>
