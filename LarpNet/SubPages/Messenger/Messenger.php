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
    src="../../jquery.min.js">
    </script>

    <body>
        <div id="center">
            
            <h1 id="Title">Message log:</h1>

            <div id="Chat">
            </div>  
            
            <form id="newmessage" autocomplete="off">
            <div class="textfield">
                <input autocomplete="false" name="hidden" type="text" style="display:none;">
                <textarea rows="3" cols="20" style="overflow:auto" type="text" required name="message" id="message" placeholder="New message"></textarea>
                <input class="send" type="button" value="Send" id="Send" name="Send">
            </div>
        </form> 
        </div>
        <input class="button" type="button" onclick="window.location.href='../../MainPage/main.php';" value="Back"></button>
    </body>

    <script src="Async.js"></script>
</html>
