// Google +1 button
window.___gcfg = {lang: 'en-GB'};(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/plusone.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();

jQuery(document).ready(function() {

    //ACCORDION BUTTON
    jQuery('.accTitle').click(function() {
        jQuery('.accTitle').removeClass('on');
        jQuery('.accContent').slideUp('normal');
        if(jQuery(this).next().is(':hidden') == true) {
            jQuery(this).addClass('on');
            jQuery(this).next().slideDown('normal',function(){
                /*var offset = jQuery(this).position().top;
                 jQuery('html, body').delay(300).animate({scrollTop: offset - '50' + 'px'}, 500);*/
            });
        }
    });
    jQuery('.accTitle').mouseover(function(){jQuery(this).addClass('over');}).mouseout(function(){jQuery(this).removeClass('over');});

    fixresponsive();
    jQuery("#field_1").next().show();
});

jQuery(window).bind('resize orientationchange', function() {
    fixresponsive();
});

var fixresponsive = function() {
    var ww = document.body.clientWidth;
    if (ww >= 1000) {
        jQuery('.accTitle').hide();
        jQuery('.accContent').show();
    } else if (ww <= 999) {
        if(jQuery('.accTitle').hasClass('on')) {

        } else {

            jQuery('.accTitle').show();
            jQuery('.accContent').hide();
        }
    }
}