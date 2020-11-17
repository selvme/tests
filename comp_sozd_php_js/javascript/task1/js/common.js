$('.button1').click(function() {
    if ($('div#block').hasClass('item')) {
        $('div#block').removeClass('item').addClass('list');
}
    else {
        $('div#block').removeClass('list').addClass('item');
    }
})

