$('#top-tab').click(function() {
    $('#top-content').addClass('news-content-active');
    $('#new-content,#best-content,#example-content').removeClass('news-content-active');
})

$('#new-tab').click(function() {
    $('#new-content').addClass('news-content-active');
    $('#top-content,#best-content,#example-content').removeClass('news-content-active');
})

$('#best-tab').click(function() {
    $('#best-content').addClass('news-content-active');
    $('#top-content, #new-content, #example-content').removeClass('news-content-active');
})

$('#example-tab').click(function() {
    $('#example-content').addClass('news-content-active');
    $('#top-content, #new-content, #best-content').removeClass('news-content-active');
})

$('.welcome-title').fadeIn(1000);
