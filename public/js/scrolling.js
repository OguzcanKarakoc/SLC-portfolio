// Returns true if the specified element has been scrolled into the viewport.
function isElementInViewport(elem) {
    var $elem = elem;

    // Get the scroll position of the page.
    var scrollElem     = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
    var viewportTop    = $(scrollElem).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    // Get the position of the element on the page.
    var elemTop    = Math.round($elem.offset().top);
    var elemBottom = elemTop + $elem.height();

    return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
}

// Check if it's time to start the animation.
function checkAnimation(elem) {
    var $elem = $(elem);

    // If the animation has already been started
    if ($elem.hasClass('start')) return;

    if (isElementInViewport($elem)) {
        // Start the animation
        $elem.addClass('start');
        progress_bar();
    }
}

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('.navbar-nav a').each(function () {
        var currLink   = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.navbar-nav li a').removeClass("active");
            currLink.addClass("active");
        }
        else {
            currLink.removeClass("active");
        }
    });
}

var nav_height    = $('.navigation').height();
var ans           = $(window).height() * 0.90;
var about_padding = ans + nav_height;

// Capture scroll events
$(window).scroll(function () {
    checkAnimation('#skills-pgr');

    var mn  = $(".navigation");
    var mns = "main-nav-scrolled";
    var hdr = $('#homepage-banner').height();
    if ($(this).scrollTop() > hdr) {
        mn.addClass(mns);
        $("#about").css("margin-top", about_padding + "px");
    } else {
        mn.removeClass(mns);
        $("#about").css("margin-top", "0");
    }

    onScroll();
});


$(document).ready(function () {
    $('a.nav-link[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");

        $('a').each(function () {
            $(this).removeClass('active');
        });
        $(this).addClass('active');

        var target  = this.hash,
            menu    = target;
        var $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top + 2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});


$(".filter > div > div").on("click", function () {

    var filter = $(".filter > div > div");

    if ($(this).hasClass('active_filter')) {
        //do nothing
    } else {
        $.each(filter, function (key, obj) {
            if ($(obj).hasClass('active_filter')) {
                // remove the class
                $(obj).removeClass('active_filter');
                $(obj).addClass('disabling_filter');
                setTimeout(function() {
                    $(obj).removeClass('disabling_filter');
                }, 1000)
            }
        });
        $(this).addClass('active_filter');
    }
});


