<?php
//Checking if user has a valid login
session_start();
if (empty($_SESSION['Username'])) {
    header('Location: ../../index.php');
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);
//Including the connection to the database
include("../../connection.php");

$servicename = "CrewLog";
$stmt = $conn->prepare("SELECT * FROM `Disabled_Systems` WHERE BINARY `SystemName` = ? AND `Status` = 'disabled'");
$stmt->bind_param('s', $servicename);
$stmt->execute();
$rows = mysqli_num_rows($stmt->get_result());
//If user with given name exists
if ($rows < 1) {

if (isset($_SESSION['SelectedCrew'])) {
    //Selecting and displaying the info of selected crew member
    $stmt = $conn->prepare("SELECT * FROM `Character_Info` WHERE `InGameName` = ?");
    $stmt->bind_param('s', $_SESSION['SelectedCrew']);
    $stmt->execute();
    $result = $stmt->get_result();

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $str=preg_replace('/\s+/', '', $_SESSION['SelectedCrew']);
            $imagelink = "../PersonalInfo/PlayerImages/".$str.".jpg";

            echo "<img src='$imagelink'>";
            
            echo "</img>";
            
            echo "<h2 style='text-decoration: underline;'>Basic info</h2>";

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

            echo "<h2 style='text-decoration: underline;'>Description:</h2>";

            echo "<p>";
            echo $row['Description'];
            echo "</p>";

            echo "<p id='notice'>Notice: some information has been restricted due to user privacy</p>";

            echo '<form action="UnSelect.php" method="POST">';
            echo "<input type='submit' value='Back'>";
            echo "</form>";
        }
    }

} else {

    //Selecting and displaying all crew members
    $stmt = $conn->prepare("SELECT * FROM Character_Info WHERE InGameName != 'Sussy Baka'");
    $stmt->execute();
    $result = $stmt->get_result();

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['InGameName'];
            echo '<form action="SelectCrew.php" method="POST">';
            echo "<input type='submit' id='Name' name='Name' value=\"$name\">";
            echo "</form>";

        }

        echo '<form action="SelectCrew.php" method="POST">';
        echo "<input type='submit' id='Name' name='Name' value='Sussy Baka' style='position: absolute; left: 0%; height: 10px; width: 10px; margin: 0px; padding: 0px; opacity: 0;'>";
        echo "</form>";
    } else {echo "There are no crew members to display";}

}
} else {echo "Error 420: Virus alert!";}
?>