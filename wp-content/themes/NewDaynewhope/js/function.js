$(document).ready(function(){
	$('.slide-list').cycle({ 
		fx:     'scrollHorz', 
		timeout: 7000, 
		next:   '#next_events',
		prev:   '#previous_events',
		vertical: true,
	});
		
			
	$(".slide > ul > li:not(:first)").fadeOut();
	$(".slide-list > ul > li:first").addClass('active');
	$(".slide-list li").click(function(){
	var $index = $(".slide-list li").index(this);
	$index = $index + 1;
	$(".slide li:nth-child("+$index+")").fadeIn();
	$(".slide li:nth-child("+$index+")").siblings().hide();
	$(this).siblings().removeClass("active");
	$(this).addClass("active");
	});
});