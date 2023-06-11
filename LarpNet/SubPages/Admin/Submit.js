
$("#DisablePersonal").click(function () {
    $.post( "Disable.php", { value: "personal" } );
});

$("#DisableMessenger").click(function () {
    $.post( "Disable.php", { value: "messenger" } );
});


$("#DisableBank").click(function () {
    $.post( "Disable.php", { value: "banking" } );
});


$("#DisableNotepad").click(function () {
    $.post( "Disable.php", { value: "notepad" } );
});

$("#DisableCrewLog").click(function () {
    $.post( "Disable.php", { value: "crewlog" } );
});






$("#EnablePersonal").click(function () {
    $.post( "Enable.php", { value: "personal" } );
});


$("#EnableMessenger").click(function () {
    $.post( "Enable.php", { value: "messenger" } );
});


$("#EnableBank").click(function () {
    $.post( "Enable.php", { value: "banking" } );
});


$("#EnableNotepad").click(function () {
    $.post( "Enable.php", { value: "notepad" } );
});

$("#EnableCrewLog").click(function () {
    $.post( "Enable.php", { value: "crewlog" } );
});