<?php
session_start();

//Checking if user has a valid login
if (empty($_SESSION['user'])) {
    header('Location: ../../index.php');
}


//Including the connection to the database
include("../../connection.php");


//Checking if the message would be empty, we wont want to send any of those
if (empty($_POST['message'])) {


} else {


    if ($_SESSION['Username'] != 'Sussy Baka') {

    //Taking the input from the Post method into php variables
    $user = $_SESSION['Username'];
    $message = $_POST['message'];
    
        //Sending message into database
        $stmt = $conn->prepare("INSERT INTO `Messages` (message, sender)
        VALUES(?, ?)");
        $stmt->bind_param('ss', $message, $user);
        $stmt->execute();
    }
} 

  