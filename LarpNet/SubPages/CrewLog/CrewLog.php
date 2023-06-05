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
        <link rel="stylesheet" href="CrewLog.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    </head>

    <script
    src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
    crossorigin="anonymous">
    </script>

    <body>
        <div id="center">
            <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Takaisin"></button>
            <h1 id="Title">Miehistöloki:</h1>

            
            <div id="CrewLog">
            </div>
        </div>
    </body>

    <script src="LoadCrew.js"></script>
</html>
