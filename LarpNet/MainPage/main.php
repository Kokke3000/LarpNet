<?php
    session_start();

    if (isset($_SESSION['Username'])) {
    
    } else {
        header('Location: ../LoginPage/login.php');
    }
    
    if ($_SESSION['Username'] !=='Admin') {
      $style = "style='display:none;'";
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
  <nav class="btn-container">
    <button class="btn"><span class="btn__content"><a href="../SubPages/PersonalInfo/Personal.php">Personal info</a></span></button>
    <button class="btn"><span class="btn__content"><a href="../SubPages/Banking/Bank.php">Inter Galactic Bank</a></span></button>
    <button class="btn"><span class="btn__content"><a href="../SubPages/Notes/Notes.php">Notepad</a></span></button>
    <button class="btn"><span class="btn__content"><a href="../SubPages/Messenger/Messenger.php">Messenger</a></span></button>
    <button class="btn"><span class="btn__content"><a href="../SubPages/CrewLog/CrewLog.php">Crew log</a></span></button>
</nav>

>>>>>>> Stashed changes
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link rel="stylesheet" href="main.css">
  <title>Main Page</title>
</head>
<body>
  <div id="center">
    <div id="top-bar">
      <nav>
            <button class="btn"><span class="btn__content"><a href="../SubPages/PersonalInfo/Personal.php">Personal info</a></span></button>
            <button class="btn"><span class="btn__content"><a href="../SubPages/Banking/Bank.php">Inter Galactic Bank</a></span></button>
            <button class="btn"><span class="btn__content"><a href="../SubPages/Notes/Notes.php">Notepad</a></span></button>
            <button class="btn"><span class="btn__content"><a href="../SubPages/Messenger/Messenger.php">Messenger</a></span></button>
            <button class="btn"><span class="btn__content"><a href="../SubPages/CrewLog/CrewLog.php">Crew log</a></span></button>
        
      </nav>    
    </div>

  <div id="Admin">
  <button class="btn" <?php echo $style;?>><span class="btn__content"><a href="../SubPages/Admin/Admin.php">Admin controlls</a></span></button>
  </div>

    <div id="NewsContainer">
      <h1>Intergalactic news:</h1>
      <div id="News">
        <p>Tämä on testiartikkeli</p>
      </div>
    </div>
  </div>
</body>
</html>
