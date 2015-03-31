$(document).ready(function($) {
	
	function isMobile(){
	    return (
	        (navigator.userAgent.match(/Android/i)) ||
			(navigator.userAgent.match(/webOS/i)) ||
			(navigator.userAgent.match(/iPhone/i)) ||
			(navigator.userAgent.match(/iPod/i)) ||
			(navigator.userAgent.match(/iPad/i)) ||
			(navigator.userAgent.match(/BlackBerry/))
	    );
	}
	
	
	if(!isMobile()) {
		$('.mobile__button p').click(function(){
			$('.mobile-nav').find('.mobile__nav').slideToggle(200);
		});
	}else if(isMobile()){
		$('.mobile__button p').on({ 'touchstart' : function(){ 
			$('.mobile-nav').find('.mobile__nav').slideToggle(200);
		}});
	}
});