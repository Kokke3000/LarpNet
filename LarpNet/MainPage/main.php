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
            <h1>Intergalaktinen Henkilörekisteri</h1>
            <div id="top-bar">
                <nav>
                    <ul id="Buttons">
                    <input type="button" id="button" onclick="window.location.href='../SubPages/PersonalInfo/Personal.php';" value="Omat tiedot"></button>
                    <input type="button" id="button" onclick="window.location.href='../SubPages/Banking/Bank.php';" value="Inter Galaktinen Pankki"></button>
                    <input type="button" id="button" onclick="window.location.href='../SubPages/Notes/Notes.php';" value="Muistio"></button>
                    <input type="button" id="button" onclick="window.location.href='../SubPages/Messenger/Messenger.php';" value="Messenger"></button>
                    <input type="button" id="button" onclick="window.location.href='../SubPages/StarMaps/Maps.php';" value="Tähtikartat"></button>
                    </ul>
                </nav>    
            </div>
        </div>
    </body>
</html>
