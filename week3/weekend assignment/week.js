$(document).ready(function(){
    $.getJSON('jason',function(data){
        $.each(data,function(i,W3D3){

  
$('ul#users').append('<li>'+W3D3.name+'&nbsp is a &nbsp'+jason.species+'</li>');
})
})
})