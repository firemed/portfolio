$(function() {
	$('nav a[href^="#"]').click(function() {
		var theID = $(this).attr("href");					
		$('html, body').animate({scrollTop:$(theID).offset().top}, 2000,'easeInOutCubic');
	});
	
 });
 
$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});