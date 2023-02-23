<?php
    session_start();

    if (isset($_SESSION['Username'])) {
    
    } else {
        header('Location: ../../LoginPage/login.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Notes.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 

        <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous">
        </script>
        <script src="Notes.js"></script>

    </head>
    <body onload="LoadNotes()">
        <div id="center">
            <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Takaisin"></button>
            <h1>Muistiinpanot</h1>
            <form id="Form">
                <p id="Notes" contentEditable="true"></p>
                <input type="button" id="Save" value="Save" name="Save" onclick="SaveNotes()">
            </form>

            <p id="ErrorDump"></div>
    </body>
</html>
