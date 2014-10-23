$(document).ready(function() { 
	$('ul.menu').superfish({ 
		delay:       600,                            // one second delay on mouseout 
		animation:   {height:'show'},  // fade-in and slide-down animation 
		speed:       'normal',                          // faster animation speed 
		autoArrows:  false,                           // disable generation of arrow mark-up 
		dropShadows: false                            // disable drop shadows 
	});
	
	$('.box-img-hover').hover(function(){
	   $(this).stop(true,false).animate({marginTop:"-25px", paddingBottom:"25px"}, {easing: "easeOutElastic"});
	  },function(){
	   $(this).stop(true,false).animate({marginTop:"0px", paddingBottom:"0px"}, {duration: 200});
	 });;

	/*************** newsletter form  ****************/
	
	$('.logo_menu').toggle(
		function(){$('.menu2_holder').slideDown()},
		function(){$('.menu2_holder').slideUp()}
	)
	$('.slider').append('<div class="bottom-bg"></div>')
}); 