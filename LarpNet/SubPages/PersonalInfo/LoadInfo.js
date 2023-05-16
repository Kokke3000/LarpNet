$("#Description").load("Loaders/LoadDescription.php");
$("#Info").load("Loaders/LoadInfo.php");

imagelink = "PlayerImages/" + PlayerName + ".jpg";
document.getElementById("PlayerImage").src = imagelink;


window.setInterval(function () {
    $("#Description").load("Loaders/LoadDescription.php");

    $("#Info").load("Loaders/LoadInfo.php");


    document.getElementById("PlayerImage").src = imagelink;
}, 1000);
