<?php
    session_start();

    if (isset($_SESSION['Username'])) {
    
    } else {
        header('Location: ../LoginPage/login.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div id="center">
            <div id="top-bar">
                <nav>
                    <ul id="Buttons">
                    <input type="button" id="button" onclick="window.location.href='../SubPages/PersonalInfo/Personal.php';" value="Omat tiedot"></button>
                    <input type="button" id="button" onclick="window.location.href='../SubPages/Banking/Bank.php';" value="Inter Galaktinen Pankki"></button>
                    <input type="button" id="button" onclick="window.location.href='../SubPages/Encyclopedia/Encyclopedia.php';" value="Tietokirja"></button>
                    <input type="button" id="button" onclick="window.location.href='../SubPages/StarMaps/Maps.php';" value="Tähtikartat"></button>
                    </ul>
                </nav>    
            </div>

            <div id="NewsContainer">
                <h1>Intergalaktiset uutiset:<h1>
                <div id="News">
                    <p>This is a test news article<p>
                </div>
            </div>
        </div>
    </body>
</html>
