<?php
    session_start();

    if (isset($_SESSION['Username'])) {
    
    } else {
        header('Location: ../../LoginPage/login.html');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    </head>
    <body>
        <div id="center">
            <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Home"></button>
            <h1>Omat tiedot</h1>
        </div>
    </body>

    <script src="main.js"></script>
</html>
