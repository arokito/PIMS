updateCounter();

$(document).ready(function() {
    //        $("#countries").msDropdown();
    $('.lang').click(function(e) {
        e.preventDefault();
        var lang = $(this).val();
        setLang(lang);
    });

    //Sticky navigation
    var num = $('.nav-wrapper').offset().top;
    $(window).bind('scroll', function() {
        if ($(window).scrollTop() > num) {
            $('.nav-wrapper').addClass('fixed');
        } else {
            $('.nav-wrapper').removeClass('fixed');
        }
    });

    // fade in .back-top
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('.back-to-top').fadeIn();
            } else {
                $('.back-to-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('.back-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

    $(".sidebar-toggle-right").click(function(e) {
        e.preventDefault();
        $('.sidepanel-overlay').css('display', 'block');
        $('.sidepanel-overlay').click(function() {
            $(this).css('display', 'none');
            $('.menu').css('width', '0');
        });
        $('.menu').css('width', '250px');
    });
});