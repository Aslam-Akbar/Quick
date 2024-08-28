var top_offset = $('.one_page').height() +0;
$('.one_page quick_menu .nav_scroll').onePageNav({
    currentClass: 'current',
    changeHash: false,
    scrollSpeed: 1000,
     scrollOffset: top_offset,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing',
});

$(".nav_scroll > li:first-child").addClass("current");
/* sticky nav 1 */
$('.one_page').scrollToFixed({
    preFixed: function() {
        $(this).find('.scroll_fixed').addClass('prefix');
    },
    postFixed: function() {
        $(this).find('.scroll_fixed').addClass('postfix').removeClass('prefix');
    }
});	
    
/* sticky nav 2 */
var headers1 = $('.trp_nav_area');
$(window).on('scroll', function() {

    if ($(window).scrollTop() > 200) {
        headers1.addClass('hbg2');
    } else {
        headers1.removeClass('hbg2');
    }		

});		

$('.counter').counterUp({
    delay: 10,
    time: 1000
});	