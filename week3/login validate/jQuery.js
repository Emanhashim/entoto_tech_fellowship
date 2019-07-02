$(document).ready(function() {
    $(' div,kl').mouseenter(function() {
        $(this).animate({
            height: '+=100px',
            width: '+=100px',
            
        });
    })

    $('div,kl').mouseleave(function() {
        $(this).animate({
            height: '-=50px',
            width: '-=50px'
        });
    });
    //
    $('div,kl').click(function() {
        $(this).css('background-color', 'purple');
      
    });
})