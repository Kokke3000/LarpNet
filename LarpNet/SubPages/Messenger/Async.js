

window.setInterval(function () {
    $("#Chat").load("LoadMessages.php");
}, 1000);

//Function to send messages when button is pressed
$("#Send").click(function () {
        var post_data = $('#newmessage').serialize();
        $.post('SendMessage.php', post_data);
        document.getElementById('message').value = '';
        post_data = '';
});

//Binding the enter key to the send button
$(document).keypress(function(e){
    if (e.which == 13){
        $("#Send").click();
    }
    });