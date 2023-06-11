<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="Login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Login</title>
    </head>
    <body>
        <img class="planet" src="planet.png" alt="planeetta">
        <div id="center">
            <div class="h1div">
            <h1>Intergalactic personel registry</h1>
            </div>
            <form action="Check.php" method="post" id="Form">
                <div class="login">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required="yes"><br><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required="yes"><br><br>
                    <input type="submit" id="login" value="Log in">
                    <br>
                    <div id="InvalidLogin">
                    <p>Wrong username or password!<p>
                    </div>
                </div>
          </form>
        </div>
    </body>

    <?php
            session_start();
            if ($_SESSION['InvalidLogin'] == 1) {
                echo (
                '<script type="text/JavaScript"> 
                document.getElementById("InvalidLogin").style.display = "inline";
                </script>'
                );
            }
    ?>
</html>
