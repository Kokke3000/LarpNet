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
        <link rel="stylesheet" href="Bank.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    </head>
    <body>
        <div id="center">

            <div id="main">
            <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Home"></button>
            <h1>Pankki</h1> 
            <h1>Krediittejä: 552</h1>
            </div>

            <div id="HistoryContainer">
                <p>Pankkihistoria
                <div id="History">
                    <p> 23:59 : +58 Krediittiä lähettäjältä: Mako Rutledge <p>
                </div>
            </div>
            
            <p>Lähetä krediittejä<p>
            <div id="SendMoney">
                
                <form action="Check.php" method="post" d="Form">
                    <label for="RecieverName">Saajan nimi:</label>
                    <input type="text" id="username" name="RecieverName" required="yes"><br><br>
                    <input type="submit" value="Lähetä">
                </form>
            </div>
        </div>
    </body>

    <script src="main.js"></script>
</html>
