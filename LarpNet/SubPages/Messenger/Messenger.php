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
        <link rel="stylesheet" href="Messenger.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    </head>

    <script
    src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
    crossorigin="anonymous">
    </script>

    <body>
        <div id="center">
            <input type="button" onclick="window.location.href='../../MainPage/main.php';" value="Back"></button>
            <h1 id="Title">Message log:</h1>

            <div id="Chat">
            </div>

            <form id="newmessage" autocomplete="off">
                <div class="textfield">
                    <input autocomplete="false" name="hidden" type="text" style="display:none;">
                    <input type="text" required name="message" id="message" placeholder="New message" maxlength="40">
                </div>
                    <input type="button" value="Send" id="Send" name="Send">
            </form>
        </div>
    </body>

    <script src="Async.js"></script>
</html>
