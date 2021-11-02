$(function(){
	var box = $('.box')
	box.each(function(){
		var anchor = $(this);
		
		box.bind('mouseenter focus',function(){
			box.css('background-position',0);
		});
		box.bind('mouseleave blur',function(){
			box.css('background-position',0);
		});
	});
});