$("#Notes").load("LoadNotes.php");

window.setInterval(function () {
    $("#Notes").load("LoadNotes.php");
}, 1000);