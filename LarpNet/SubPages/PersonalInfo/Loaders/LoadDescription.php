<?php

//Including connection to the database
include "../../../connection.php";

//Checking if user has a valid loginz
if (isset($_SESSION['Username'])) {
    
} else {
    header('Location: ../../LoginPage/login.php');
}


$servicename = "Personal";
$stmt = $conn->prepare("SELECT * FROM `Disabled_Systems` WHERE BINARY `SystemName` = ? AND `Status` = 'disabled'");
$stmt->bind_param('s', $servicename);
$stmt->execute();
$rows = mysqli_num_rows($stmt->get_result());
//If user with given name exists
if ($rows < 1) {

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

} else {echo "Error 420: Virus alert!";}
?>
