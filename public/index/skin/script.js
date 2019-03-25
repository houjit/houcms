$(function(){
	
	var navbarB = $('.navbar');
	var footer = $('.footer-btn').offset().top;
	var sec_height = $(window).height();
	navbarB.addClass('scrollt');
	function bannerSc(){		
		// 导航靠头部
		var navbarB = $('.navbar');
		var footer = $('.footer-btn').offset().top;
		var sec_height = $(window).height();
		if(10<$(window).scrollTop()){
			navbarB.removeClass('menu-top');	
		}else{
			navbarB.addClass('menu-top');			
		}
		// 导航靠底部		
		if(footer-sec_height+230<$(window).scrollTop()){
			navbarB.addClass('bottom');
		}else{
			navbarB.removeClass('bottom');
		}		
	}
	$(window).scroll(function(){
		// 分页
		bannerSc();
	});
})
$(function(){
	// title 线
	var Line = $('.sub-title-border');
	var Width = $('.sub-title-txt h2').width();
	var MWidth = $('.sub-title').width();
	Line.width((MWidth-Width)/2-30);
})
