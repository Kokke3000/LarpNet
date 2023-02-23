function LoadNotes () {
$("#Notes").load("LoadNotes.php"); 
}

function SaveNotes() {
    NotesToSave = $('#Notes').text()
    console.log(NotesToSave)


    $.post('SaveNotes.php', {Notes: NotesToSave});
    $("#Notes").load("LoadNotes.php"); 
}