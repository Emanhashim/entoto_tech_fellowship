$(document).ready(function() {
    $('div').mouseenter(function() {
        $(this).animate({
            height: '+=20px'
        });
    })

    $('div').mouseleave(function() {
        $(this).animate({
            height: '-=20px'
        });
    });
    //
    $('div').click(function() {
        $(this).css('background-color', '#00AAFF');
    });
})