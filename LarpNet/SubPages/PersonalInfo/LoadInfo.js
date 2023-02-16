
imagelink = "PlayerImages/" + PlayerName + ".jpg";

console.log(imagelink)

window.setInterval(function () {
    $("#Description").load("Loaders/LoadDescription.php");

    $("#InfoContainer").load("Loaders/LoadInfo.php");


    document.getElementById("PlayerImage").src = imagelink;
}, 1000);
