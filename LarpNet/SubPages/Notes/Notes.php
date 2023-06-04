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
        <meta name="viewport" content="width=device-width, initial-scale=0.6" /> 
        <link rel="stylesheet" href="notes.css">

        <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous">
    </script>
    </head>
    <body>
        <div id="center">
            <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Takaisin" class="button"></button>
            <H1 id="Title"> Muistio </H1>

            <div id="Notes">
            </div>


            <div id="NewNoteContainer">
                    <H3 id="title">Luo uusi muistiinpano</H3>
                    <form action="SaveNote.php" method="post" id="Form">

                        <label for="note">Uusi muistiinpano:</label>
                        <input type="text" id="note" name="note" required="yes"><br><br>

                        <input type="submit" value="Tallenna" class="button">
                    </form>
            </div>
    </body>

    <script src="Load.js"></script>
</html>
