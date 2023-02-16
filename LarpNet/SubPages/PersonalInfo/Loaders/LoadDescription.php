<?php
//Checking if user has a valid login
session_start();
if (isset($_SESSION['Username'])) {
    
} else {
    header('Location: ../../LoginPage/login.php');
}

//Establishing connection to database
$conn = new mysqli("192.168.1.135", "root", "TietokannanSalis1234", "Players");

//Selecting all messages and printing them out
$stmt = $conn->prepare("SELECT `Description` FROM `Character_Info` WHERE BINARY `InGameName` = ?");
$stmt->bind_param('s', $_SESSION['Username']);
$stmt->execute();
$result = $stmt->get_result();
if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>";
        echo $row['Description'];
        echo "</p>";
    }
} else {echo "Error while loading description!";}
?>
