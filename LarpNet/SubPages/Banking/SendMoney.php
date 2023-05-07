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


$SendTo = $_POST['RecieverName'];
$AmountToSend = $_POST['AmountToSend'];

//Including connection to the database
include "../../connection.php";


//Checking if the "Send to" address exists
$stmt = $conn->prepare("SELECT `Credits` FROM `Player_Data` WHERE BINARY `InGameName` = ?");
$stmt->bind_param('s', $SendTo);
$stmt->execute();
$result = $stmt->get_result();

if(mysqli_num_rows($result) > 0) {

    //Getting amount of money on players account
    $stmt = $conn->prepare("SELECT `Credits` FROM `Player_Data` WHERE BINARY `InGameName` = ?");
    $stmt->bind_param('s', $_SESSION['Username']);
    $stmt->execute();
    $result = $stmt->get_result();

    //Checking if the account has enough money to send
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['Credits'] >= $AmountToSend) {

            //Reducing mony from sender
            $stmt = $conn->prepare("UPDATE `Player_Data` SET `Credits` = `Credits` -  ? WHERE BINARY `InGameName` = ?");
            $stmt->bind_param('is', $AmountToSend, $_SESSION['Username']);
            $stmt->execute();
            
            //Adding money to reciever
            $stmt = $conn->prepare("UPDATE `Player_Data` SET `Credits` = `Credits` +  ? WHERE BINARY `InGameName` = ?");
            $stmt->bind_param('is', $AmountToSend, $SendTo);
            $stmt->execute();
            
            $_SESSION['MoneySentError'] = 1;
            header('Location: Bank.php');
        } else {
            $_SESSION['MoneySentError'] = 3;
            header('Location: Bank.php');
        }
    }
} else {
    $_SESSION['MoneySentError'] = 2;
    header('Location: Bank.php');
}
?>
