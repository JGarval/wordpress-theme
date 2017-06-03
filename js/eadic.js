/*
====================
ADMIN JS
====================

@package eadic-theme
*/

jQuery( document ).ready( function( $ ) {

// Close cookies
jQuery('#close-cookies').click(function() {
    $('#cookies').slideUp();

    var nDays = 999;
    var cookieName = "disclaimer";
    var cookieValue = "true";

    var today = new Date();
    var expire = new Date();
    expire.setTime(today.getTime() + 3600000 * 24 * nDays);
    document.cookie = cookieName+"="+escape(cookieValue)+";expires="+expire.toGMTString()+";path=/";
});

	// Sticky to Nav
	var stickyNavTop = jQuery('nav').offset().top;
	var stickyNav = function() {
		var scrollTop = jQuery(window).scrollTop();
		if (scrollTop > stickyNavTop) {
		    jQuery('.sticky').addClass('navbar-fixed-top');
				jQuery('.sticky').css('background-color', '#FFF');
				jQuery('.sticky').css('box-shadow', '0px 1px 6px #95989A');
				jQuery('.up-button').css('display', 'block');
		} else {
		    jQuery('.sticky').removeClass('navbar-fixed-top');
				jQuery('.sticky').css('background-color', 'transparent');
				jQuery('.sticky').css('box-shadow', 'none');
				jQuery('.up-button').css('display', 'none');
		}
	};
	stickyNav();
	jQuery(window).scroll(function() { stickyNav(); });

});
