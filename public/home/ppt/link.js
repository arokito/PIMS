$(function() {
    $('a[href]').each(function() {
        var href = this.href;
        $(this).removeAttr('href').css('cursor','pointer').click(function() {
            window.location = href;
        });
    });
});

