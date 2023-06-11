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
    src="../../jquery.min.js">
    </script>

    <body>
        <div id="center">
            <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Back"></button>
            <h1 id="Title">Crew log:</h1>

            <div id="CrewLog">
            </div>
        </div>
    </body>

    <script src="LoadCrew.js"></script>
</html>
