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

    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous">
    </script>


    <body>
        <div id="center">

            <div id="main">
                <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Home"></button>
                <h1>Pankki</h1> 

                <div id="CreditsContainer">
                <h1 class="CreditDisplay">Krediittejä:</h1>
                <p id="Credits" class="CreditDisplay"></p>
                </div>

                <div id="HistoryContainer">
                    <br>
                    <p>Pankkihistoria:</p>
                    <div id="History">
                    
                    </div>
                </div>
                
                <div id="SendMoneyContainer">
                    <p>Lähetä krediittejä<p>
                    <form action="SendMoney.php" method="post" id="Form">

                        <label for="RecieverName">Saajan nimi:</label>
                        <input type="text" id="username" name="RecieverName" required="yes"><br><br>

                        <label for="AmountToSend">Krediittien määrä:</label>
                        <input type="text" id="amount" name="AmountToSend" required="yes"><br><br>

                        <input type="submit" value="Lähetä">
                    </form>
                </div>
            </div>
        </div>
    </body>

    <script src="Load.js"></script>
</html>
