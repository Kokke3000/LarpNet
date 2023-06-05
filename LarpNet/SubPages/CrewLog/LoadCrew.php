<?php
//Checking if user has a valid login
session_start();
if (empty($_SESSION['Username'])) {
    header('Location: ../../index.php');
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);
//Including the connection to the database
include("../../connection.php");


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
            

            echo "<p>";
            echo "<label for='InGameName'>Nimi: </label>";
            echo $row['InGameName'];
            echo "</p>";
    
            echo "<p>";
            echo "<label for='Age'>Ikä: </label>";
            echo $row['Age'];
            echo "</p>";
    
            echo "<p>";
            echo "<label for='Pronouns'>Pronominit: </label>";
            echo $row['Pronouns'];
            echo "</p>";
    
            echo "<p>";
            echo "<label for='Skills'>Taidot: </label>";
            echo $row['Skills'];
            echo "</p>";
    
            echo "<p>";
            echo "<label for='JobTitle'>Työnimike: </label>";
            echo $row['JobTitle'];
            echo "</p>";

            echo '<form action="UnSelect.php" method="POST">';
            echo "<input type='submit' value='Takaisin'>";
            echo "</form>";
        }
    }

} else {

    //Selecting and displaying all crew members
    $stmt = $conn->prepare("SELECT * FROM Character_Info");
    $stmt->execute();
    $result = $stmt->get_result();

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['InGameName'];
            echo "<p>";
            echo $row['JobTitle'];
            echo ": ";
            echo $row['InGameName'];
            echo "</p>";
            echo '<form action="SelectCrew.php" method="POST">';
            echo "<input type='submit' id='Name' name='Name' value=\"$name\">";
            echo "</form>";
        }
    } else {echo "There are no crew members to display";}

}

?>