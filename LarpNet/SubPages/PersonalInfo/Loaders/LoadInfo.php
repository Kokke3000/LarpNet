<?php
//Checking if user has a valid login
session_start();
if (isset($_SESSION['Username'])) {
    
} else {
    header('Location: ../../LoginPage/login.php');
}

//Including connection to the database
include "../../../connection.php";

//Selecting all messages and printing them out
$stmt = $conn->prepare("SELECT * FROM `Character_Info` WHERE BINARY `InGameName` = ?");
$stmt->bind_param('s', $_SESSION['Username']);
$stmt->execute();
$result = $stmt->get_result();

if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>Perustiedot</h2>";

        echo "<p>";
        echo "<label for='InGameName'>Name: </label>";
        echo $row['InGameName'];
        echo "</p>";

        echo "<p>";
        echo "<label for='Age'>Age: </label>";
        echo $row['Age'];
        echo "</p>";

        echo "<p>";
        echo "<label for='Pronouns'>Pronouns: </label>";
        echo $row['Pronouns'];
        echo "</p>";

        echo "<p>";
        echo "<label for='Skills'>Skills: </label>";
        echo $row['Skills'];
        echo "</p>";

        echo "<p>";
        echo "<label for='JobTitle'>Job title: </label>";
        echo $row['JobTitle'];
        echo "</p>";
    }
} else {echo "Error while loading info!";}
?>
