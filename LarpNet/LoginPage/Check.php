<?php
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];


$conn = new mysqli("192.168.1.135", "root", "TietokannanSalis1234", "Players");
if ($conn->connect_error) {
    die('Conection Failed: '.$conn->connect_error);
} else {
    $stmt = $conn->prepare("SELECT `RealName` FROM `Player_Data` WHERE BINARY `InGameName` = ?");
    $stmt->bind_param('s', $user);
    $stmt->execute();
    $rows_in_usernames = mysqli_num_rows($stmt->get_result());

     //If user with given name exists
     if ($rows_in_usernames != 0) {
        //Find the salt of the user
        $stmt = $conn->prepare("SELECT `RealName` FROM `Player_Data` WHERE BINARY `InGamePassword` = ?");
        $stmt->bind_param('s', $pass);
        $stmt->execute();
        $rows_in_passwords = mysqli_num_rows($stmt->get_result());

        if ($rows_in_passwords != 0) {

            //Check if the user with the given password and username are the same one
            if($rows_in_usernames == $rows_in_passwords) {
                $_SESSION['InvalidLogin'] = 0;
                $_SESSION['Username'] = $user;
                header('Location: ../MainPage/main.php');
            } else {
                $_SESSION['InvalidLogin'] = 1;
                header('Location: login.php');
            }

        } else {
            $_SESSION['InvalidLogin'] = 1;
            header('Location: login.php');
        }
    } else {
        $_SESSION['InvalidLogin'] = 1;
        header('Location: login.php');
    }


}

?>