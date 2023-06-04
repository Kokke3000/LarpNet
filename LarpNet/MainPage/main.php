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
  <title>Main Page</title>
</head>
<body>
  <div id="center">
    <div id="top-bar">
      <nav>
            <button class="btn"><span class="btn__content"><a href="../SubPages/PersonalInfo/Personal.php">Omat tiedot</a></span></button>
            <button class="btn"><span class="btn__content"><a href="../SubPages/Banking/Bank.php">Inter Galaktinen Pankki</a></span></button>
            <button class="btn"><span class="btn__content"><a href="../SubPages/Notes/Notes.php">Muistio</a></span></button>
            <button class="btn"><span class="btn__content"><a href="../SubPages/Messenger/Messenger.php">Messenger</a></span></button>
            <button class="btn"><span class="btn__content"><a href="../SubPages/CrewLog/CrewLog.php">Miehistöloki</a></span></button>
        
      </nav>    
    </div>

    <div id="NewsContainer">
      <h1>Intergalaktiset uutiset:</h1>
      <div id="News">
        <p>Tämä on testiartikkeli</p>
      </div>
    </div>
  </div>
</body>
</html>
