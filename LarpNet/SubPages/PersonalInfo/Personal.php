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
        <link rel="stylesheet" href="Personal.css">
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
            <h1>Omat tiedot</h1>

            <div id="ImageContainer">
                <img id="PlayerImage"></img>
            </div>

            
            <div id="InfoContainer">
                <h2>Perustiedot: </h2>
                <p id="Info"></p>
            </div>

            <div id="DescriptionContainer">
                <h2>Kuvaus: </h2>
                <p id="Description"></p>
            </div>
        </div>
    </body>

    <script>

        var PlayerName = <?php 
        $str=preg_replace('/\s+/', '', $_SESSION['Username']);
        echo json_encode($str); 
        ?>;
    </script>
    <script src="LoadInfo.js"></script>
    
</html>
