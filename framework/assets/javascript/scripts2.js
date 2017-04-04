$('#toggle').on('click', function () { // navbar collapse
    $(this).next('.nav').toggleClass("is-collapsed-mobile");
});


// Smooth Back-to-Top Scroll
$("a[href='#top']").click(function () {
    $("html, body").animate({scrollTop: 0}, "slow");
    return false;
});


// Textarea Counter
var maxLength = 300;
$('textarea').keyup(function () {
    var length = $(this).val().length;
    var newLength = maxLength - length;
    $('#chars').text(newLength);
});


// ==========================================================================
// Scrolling Header
// ==========================================================================


(function () {
    'use strict';
    var primaryHeader = '.l__header--primary';

    var headScroll = function () {
        'use strict';
        var noScroll = 0;

        $(window).scroll(function () {
            var userScroll = $(this).scrollTop();

            if (userScroll > 500 && userScroll > noScroll) {
                $(primaryHeader).addClass('fixed slideInDown').removeClass('default');
            }
            else {
                $(primaryHeader).addClass('default').removeClass('fixed slideInOut');
            }

            noScroll = userScroll;
        });
    };


// ==========================================================================
// Throttle Scrolling Header
// ==========================================================================
    window.addEventListener('scroll', _.throttle(headScroll, 1200, {
        leading: true, trailing: true
    }));

}());


// ==========================================================================
// PopUp Modal
// ==========================================================================

(function () {
    var modalOverlay = document.querySelector('#modal'),
        modalContent = document.querySelector('#modal--content');

    // Animate Content
    $(modalContent).addClass('animated');
    $(modalOverlay).addClass('animated');

    setTimeout(function () {
        $(modalOverlay).addClass('active');
        $(modalContent).addClass('active zoomInUp');
        console.log("Modal loaded");
    }, 10000);


    // Close action
    document.getElementById('close').onclick = function () {
        $(modalOverlay).hide();
    };
}());