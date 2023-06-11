$("#Credits").load("LoadBankData.php");
$("#History").load("LoadHistory.php");

window.setInterval(function () {
    $("#Credits").load("LoadBankData.php");
    $("#History").load("LoadHistory.php");
}, 1000);

