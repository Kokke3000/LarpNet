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
        src="../../jquery.min.js">
        </script>
    </head>
    <body>
        <div id="center">
            <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Back" class="button"></button>
            <H1 id="Title"> Notepad </H1>

            <div id="Notes">
            </div>


            <div id="NewNoteContainer">
                    <H3 id="title">Create new note</H3>
                    <form action="SaveNote.php" method="post" id="Form">

                        <label for="note">New note:</label>
                        <input type="text" class="textfield" id="note" name="note" required="yes"><br><br>

                        <input type="submit" value="Save" class="button">
                    </form>
            </div>
    </body>

    <script src="Load.js"></script>
</html>
