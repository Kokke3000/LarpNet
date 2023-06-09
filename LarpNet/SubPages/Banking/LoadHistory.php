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

//Selecting all messages and printing them out
$stmt = $conn->prepare("SELECT * FROM `Bank_History` WHERE BINARY `Sender` = ? OR `Reciever` = ?");
$stmt->bind_param('ss', $_SESSION['Username'], $_SESSION['Username']);
$stmt->execute();
$result = $stmt->get_result();
if(mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
    
    if ($row['Reciever'] == $_SESSION['Username']) {
            echo "<p>";
            echo "You recieved: ";
            echo $row['Amount'];
            if ($row['Amount'] == 1) {
                echo " credit from ";
            } else {
                echo " credits from ";
            }
            echo $row['Reciever'];
            echo " (5.8.347)";
            echo "</p>";
    } 
    
    if ($row['Sender'] == $_SESSION['Username']) {
        echo "<p>";
        echo "You sent: ";
        echo $row['Amount'];
        if ($row['Amount'] == 1) {
            echo " credit to ";
        } else {
            echo " credits to ";
        }
        echo $row['Reciever'];
        echo " (5.8.347)";
        echo "</p>";
    }
}

} else {echo "No history to display!";}
?>
