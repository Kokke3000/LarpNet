<?php
//Checking if user has a valid login
session_start();
if (empty($_SESSION['Username'])) {
    header('Location: ../../index.php');
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);
//Including the connection to the database
include("../../connection.php");


$user = $_SESSION['Username'];

    //Selecting all messages and printing them out
    $stmt = $conn->prepare("SELECT * FROM Messages");
    $stmt->execute();
    $result = $stmt->get_result();

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>";
            echo $row['sender'];
            echo ": ";
            echo $row['message'];
            echo "</p>";
        }
    } else {echo "There are no messages";}
?>