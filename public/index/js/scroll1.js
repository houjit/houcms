
$(function(){
	var scrollArrty = ['.body-box .serBg1 .myDiv1 img:first-child','.body-box .serBg1 .myDiv1 img:nth-of-type(2)','.body-box .serBg1 .myDiv1 h3','.body-box .serBg1 .myDiv1 img:nth-of-type(3)','.body-box .serBg1 .myDiv1 ul li:first-child','.body-box .serBg1 .myDiv1 ul li:nth-child(2)','.body-box .serBg1 .myDiv1 ul li:nth-child(3)','.body-box .serBg1 .myDiv1 ul li:nth-child(4)','.body-box .serBg1 .myDiv1 ul li:nth-child(5)','.body-box .serBg2 .myDiv1 img:first-child','.body-box .serBg2 .myDiv1 img:nth-of-type(2)','.body-box .serBg2 .myDiv1 h3','.body-box .serBg2 .myDiv1 img:nth-of-type(3)','.body-box .serBg2 .myDiv1 ul li:first-child','.body-box .serBg2 .myDiv1 ul li:nth-child(2)','.body-box .serBg2 .myDiv1 ul li:nth-child(3)','.body-box .serBg2 .myDiv1 ul li:nth-child(4)','.body-box .serBg3 .myDiv1 img:first-child','.body-box .serBg3 .myDiv1 img:nth-of-type(2)','.body-box .serBg3 .myDiv1 h3','.body-box .serBg3 .myDiv1 img:nth-of-type(3)','.body-box .serBg3 .myDiv1 ul li:first-child','.body-box .serBg3 .myDiv1 ul li:nth-child(2)','.body-box .serBg3 .myDiv1 ul li:nth-child(3)','.body-box .serBg3 .myDiv1 ul li:nth-child(4)','.body-box .serBg3 .myDiv1 ul li:nth-child(5)','.body-box .serBg3 .myDiv1 ul li:nth-child(6)'];	
	var scrI = 0;
	var scrHeight = window.screen.availHeight;	
	var width = $(window).width();
	var n = 0;
	if(width>=1024){
		n = 250;
	}else{
		n = 50;
	}
	$(window).scroll(function(){
		scrollFn();
	})
	function scrollFn(){		
		if(scrI==scrollArrty.length){
			return false;
		}
	    var boxPos = $(scrollArrty[scrI]).offset().top;	
		var winPos = $(window).scrollTop()+scrHeight-n;
		if(boxPos<winPos){
			$(scrollArrty[scrI]).addClass('active');
			scrI++;
			if(scrI<scrollArrty.length){
				scrollFn();
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	scrollFn();
});
