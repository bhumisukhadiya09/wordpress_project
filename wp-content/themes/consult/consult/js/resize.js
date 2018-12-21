jQuery(document).ready(function($){
'use strict';
    var width  =  $(window).width();
    $('.error-page').css({ 'height' : $(window).height() });
	$(window).resize(function(){
		$('.error-page').css({ 'height' : $(window).height() });
	});
	$(window).trigger('resize');
    
});