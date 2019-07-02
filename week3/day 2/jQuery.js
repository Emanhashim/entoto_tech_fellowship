$(document).ready(function() {
    $('div').mouseenter(function() {
        $('div').hide(1000);
    })

    $('div').mouseleave(function() {
        $(this).animate({
            height: '-=20px'
        });
    });
    //
   
});
 
$('div').click(function() {
    $(this).css('background-color', '#00AAFF');
});