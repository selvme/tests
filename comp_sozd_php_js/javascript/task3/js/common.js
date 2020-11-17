$(document).ready(function(){
    $('li').each(function(i, elem){
        if ($(this).children().length > 0) {
            $(this).children('a').addClass('icon');
        }
    })

    $('ul').each(function(i, elem){
        if ($(this).children().length > 0) {
            $(this).children('a').addClass('icon');
        }
    })
})

$('a').click(function() {
        $(this).parent().children(":not(a)").toggleClass('hi');           
})
