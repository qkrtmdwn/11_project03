$(function(){

	
	//하단 이미지 버튼 슬라이드
	var banner = $('#informal .cWrap>ul>li');
	var leftBtn = $('#informal .leftBtn');
	var rightBtn = $('#informal .rightBtn');
	var set;
	var bannerWidth = $('#informal .cWrap>ul>li').width();
	//console.log(bannerWidth);
	banner.each(function(index){
		$(this).attr('data-index',index);
	});
	function move(index){
		var willMoveLeft = -(index%3*bannerWidth);
		banner.animate({left:willMoveLeft},'200');
		current = index;
	};
	var current = Math.round(Math.random()*(banner.size()-1));
	move(0);
	function slideMove(){
		set = setInterval(function(){
			current++;
			if(current==banner.size()){current=0;}
			move(current);
		},3000);
	};
	slideMove();
	$('#informal').hover(
		function(){
			clearInterval(setIntervalId);
		},
		function(){
			//slideMove();
		}
	);
	
	leftBtn.click(function(){
		current--;
		if(current<0){current=banner.size()-1;};
		var index = $(this).attr('data-index');
	});
	rightBtn.click(function(){
		current++;
		if(current>banner.size()-1){current=0;};
		var index = $(this).attr('data-index');
	});
});















































