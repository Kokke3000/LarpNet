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
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <link rel="stylesheet" href="Admin.css">
    </head>

    <script
    src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
    crossorigin="anonymous">
    </script>

    <body>
        <div id="center">

        <h1>Disable systems:</h1>
        <input type="button" class="btn" value="Disable Personal Info" id="DisablePersonal">
        <input type="button" class="btn" value="Disable Messenger" id="DisableMessenger">
        <input type="button" class="btn" value="Disable Banking" id="DisableBank">
        <input type="button" class="btn" value="Disable Notepad" id="DisableNotepad">
        <input type="button" class="btn" value="Disable Crew Log" id="DisableCrewLog">
        <br>
        <h1>Enable systems:</h1>
        <input type="button" class="btn" value="Enable Personal Info" id="EnablePersonal">
        <input type="button" class="btn" value="Enable Messenger" id="EnableMessenger">
        <input type="button" class="btn" value="Enable Banking" id="EnableBank">
        <input type="button" class="btn" value="Enable Notepad" id="EnableeNotepad">
        <input type="button" class="btn" value="Enable Crew Log" id="EnableCrewLog">
        </div>
    </body>

    <script src="Submit.js"></script>
</html>
