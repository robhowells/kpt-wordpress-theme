(function ($) {

    //Scrolling header

    var scrollingNav = function() {
        if ($(window).scrollTop() >= 150 && window.innerWidth > 760) {
            $('header').addClass('mini-header');
        }
        else {
            $('header').removeClass('mini-header');
        }
    };

    //Handle body scroll

    var mobileBodyScroll = function() {

        var $body = $('body'),
            scrollPos = $(window).scrollTop(),
            scrollingFixed = $body.hasClass('mobile-no-scroll'); 

        if(scrollingFixed) {
            $body.removeClass('mobile-no-scroll').css('top', 0);
            $(window).scrollTop($scrollPos);
        } else {
            $scrollPos = $(window).scrollTop();
            $body.addClass('mobile-no-scroll').css('top', -$scrollPos);
        }

    };

    //Mobile navigation

    var mobileNav = function() {

        var $header = $('header'),
            $navToggle = $('.header-mobile-nav-toggle');

        $navToggle.on('click', function(e) {
            e.preventDefault();
            $header.toggleClass('nav-open');
            mobileBodyScroll();
        });    

    };

    mobileNav();

    $(window).scroll(function () {
        scrollingNav();
    })

})(jQuery); 