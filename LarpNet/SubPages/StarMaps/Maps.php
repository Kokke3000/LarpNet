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
        <link rel="stylesheet" href="main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    </head>
    <body>
        <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Takaisin"></button>
        <div id="center">
            <h1>Tähtikartat</h1>
        </div>
    </body>

    <script src="main.js"></script>
</html>
