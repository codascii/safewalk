$('#menu').click(function (e) {
    $('#sidemenubar').animate({left: '0'}, 500);
    e.stopPropagation();
});

$('body').click(function (e) {
    $('#sidemenubar').animate({left: '-100%'}, 500);
});