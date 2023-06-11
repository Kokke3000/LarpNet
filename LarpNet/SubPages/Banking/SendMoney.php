<?php
//Checking if user has a valid login
session_start();
if (isset($_SESSION['Username'])) {
    
} else {
    header('Location: ../../LoginPage/login.php');
}


$SendTo = $_POST['RecieverName'];
$AmountToSend = $_POST['AmountToSend'];

//Including connection to the database
include "../../connection.php";

//Including connection to the database
include "../../connection.php";

$servicename = "Banking";
$stmt = $conn->prepare("SELECT * FROM `Disabled_Systems` WHERE BINARY `SystemName` = ? AND `Status` = 'disabled'");
$stmt->bind_param('s', $servicename);
$stmt->execute();
$rows = mysqli_num_rows($stmt->get_result());
//If user with given name exists
if ($rows < 1) {

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

            //Creating history log
            $stmt = $conn->prepare("INSERT INTO `Bank_History` (Sender, Reciever, Amount)
            VALUES(?, ?, ?)");
            $stmt->bind_param('ssi', $_SESSION['Username'], $SendTo, $AmountToSend);
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

} else {
    header('Location: Bank.php');
}
?>
