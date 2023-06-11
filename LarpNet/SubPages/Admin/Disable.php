<?php
//Checking if user has a valid login
session_start();
if (empty($_SESSION['Username'])) {
    header('Location: ../../index.php');
}


$disable = $_POST['value'];
$setting = 'disabled';

//Including connection to the database
include "../../connection.php";

//Disabling

if ($disable == "personal") {
    $todisable = 'Personal';
    $stmt = $conn->prepare("INSERT INTO `Disabled_Systems` (SystemName, Status)
    VALUES(?, ?)");
    $stmt->bind_param('ss', $todisable, $setting);
    $stmt->execute();
}

if ($disable == "notepad") {
    $todisable = 'Notepad';
    $stmt = $conn->prepare("INSERT INTO `Disabled_Systems` (SystemName, Status)
    VALUES(?, ?)");
    $stmt->bind_param('ss', $todisable, $setting);
    $stmt->execute();
    }

if ($disable == "banking") {
    $todisable = 'Banking';
    $stmt = $conn->prepare("INSERT INTO `Disabled_Systems` (SystemName, Status)
    VALUES(?, ?)");
    $stmt->bind_param('ss', $todisable, $setting);
    $stmt->execute();
    }

if ($disable == "messenger") {
    $todisable = 'Messenger';
    $stmt = $conn->prepare("INSERT INTO `Disabled_Systems` (SystemName, Status)
    VALUES(?, ?)");
    $stmt->bind_param('ss', $todisable, $setting);
    $stmt->execute();
    }

if ($disable == "crewlog") {
    $todisable = 'CrewLog';
    $stmt = $conn->prepare("INSERT INTO `Disabled_Systems` (SystemName, Status)
    VALUES(?, ?)");
    $stmt->bind_param('ss', $todisable, $setting);
    $stmt->execute();
    }

?>