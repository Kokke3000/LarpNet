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
                <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Takaisin" class="button"></button>
                <h1 id="Title">Inter Galaktinen Pankki</h1> 

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

                        <input type="submit" value="Lähetä" class="button">
                    </form>

                    <div id="FeedbackContainer">
                    <p id="SendMoneyFeedback"><p>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <?php
    //Error displaying
    if (isset($_SESSION['MoneySentError'])) {
    if ($_SESSION['MoneySentError'] == 1) {
        echo (
        '<script type="text/JavaScript"> 
        document.getElementById("SendMoneyFeedback").style.display = "inline";
        document.getElementById("SendMoneyFeedback").style.color = "green";
        document.getElementById("SendMoneyFeedback").innerHTML = "Krediitit lähetetty!"
        </script>'
        );
    }

    if ($_SESSION['MoneySentError'] == 2) {
        echo (
        '<script type="text/JavaScript"> 
        document.getElementById("SendMoneyFeedback").style.display = "inline";
        document.getElementById("SendMoneyFeedback").style.color = "red";
        document.getElementById("SendMoneyFeedback").innerHTML = "Saajan nimeä ei tunnistettu!"
        </script>'
        );
    }

    if ($_SESSION['MoneySentError'] == 3) {
        echo (
        '<script type="text/JavaScript"> 
        document.getElementById("SendMoneyFeedback").style.display = "inline";
        document.getElementById("SendMoneyFeedback").style.color = "red";
        document.getElementById("SendMoneyFeedback").innerHTML = "Ei tarpeeksi krediittejä!"
        </script>'
        );
    }
}
    ?>


    <script src="Load.js"></script>
</html>
