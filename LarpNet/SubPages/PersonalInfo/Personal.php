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
    src="../../jquery.min.js">
    </script>

    <body>
        <div id="center">
            
            <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Back"></button>
            <h1>Personal info</h1>

            <div id="ImageContainer">
                <img id="PlayerImage"></img>
            </div>

            
            <div id="InfoContainer">
                <h2>Basic info: </h2>
                <p id="Info"></p>
            </div>

            <div id="DescriptionContainer">
                <h2>Description: </h2>
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
