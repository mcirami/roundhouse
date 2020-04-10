jQuery(document).ready(function($){

	var localDev = true;

	if(localDev == true) {
		loadReload();
	}
	
	var homeSwiper = new Swiper('.home-swiper-container', {
	    mode: 'horizontal',
	    loop: true,
	    calculateHeight: true,
	    roundLength: true,
	    pagination: '.swiper-pagination',
	    paginationClickable: true,
	    autoplay: 5000,
	    preloadImages: false,
	    lazyLoading: true,
	    lazyLoadingOnTransitionStart: true,
	    nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
    
    var conferenceSwiper = new Swiper('.conference-swiper-container', {
	    mode: 'horizontal',
	    loop: true,
	    calculateHeight: true,
	    roundLength: true,
	    pagination: '.swiper-pagination',
	    paginationClickable: true,
	    autoplay: 5000,
	    preloadImages: false,
	    lazyLoading: true,
	    lazyLoadingOnTransitionStart: true,
	    nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
    
    var conferenceSwiper = new Swiper('.amenities-swiper-container', {
	    mode: 'horizontal',
	    loop: true,
	    calculateHeight: true,
	    roundLength: true,
	    pagination: '.swiper-pagination',
	    paginationClickable: true,
	    autoplay: 5000,
	    preloadImages: false,
	    lazyLoading: true,
	    lazyLoadingOnTransitionStart: true,
	    nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });

    var conferenceSwiper = new Swiper('.meetings-swiper-container', {
        mode: 'horizontal',
        loop: true,
        calculateHeight: true,
        roundLength: true,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay: 5000,
        preloadImages: false,
        lazyLoading: true,
        lazyLoadingOnTransitionStart: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });

	var headerHeight;
	var windowWidth;
	var initialWindowWidth = viewport().width;
	
	$('.main_navigation nav, .secondary_nav_wrap').css('display', 'block');
	
	slideMenu(initialWindowWidth);
	
	function slideMenu(initialWindowWidth, windowWidth) {
		
		if(windowWidth <= 600 || initialWindowWidth <= 600) {
			headerHeight = $('.nav_container').outerHeight(true);
			var content1 = $('.nav_container nav');
			$('.slide_nav').append(content1);
			
			$('.mobile_btn').click(function(){
				
				if($('.slide_nav').hasClass('menu_open') == false) {
					
					$('.slide_nav').removeClass('menuClose');
					$('.slide_nav').addClass('slideLeft');
					setTimeout(function(){
						$('.slide_nav').addClass('menu_open');
						$('html').css('overflow-y', 'hidden');
					}, 500);
					$('body').removeClass('menuClose');
					$('body').addClass('slideLeft');
					$('#fixed_header').removeClass('menuClose');
					$('#fixed_header').addClass('slideLeft');
					
				} else {
					
					$('.slide_nav').addClass('menuClose');
					$('.slide_nav').removeClass('slideLeft');
					setTimeout(function(){
						$('.slide_nav').removeClass('menu_open');
						$('html').css('overflow-y', 'scroll');
					}, 500);
					$('body').addClass('menuClose');
					$('body').removeClass('slideLeft');
					$('#fixed_header').addClass('menuClose');
					$('#fixed_header').removeClass('slideLeft');
					
				}
			});
			
		} else {
			
			headerHeight = $('#global_header').outerHeight(true) + $('.nav_container').outerHeight(true);
			var content1 = $('.slide_nav nav');
			$('body').removeClass('slideLeft');
			$('#fixed_header').removeClass('slideLeft');
			$('.nav_container .container').append(content1);
			$('.slide_nav').addClass('menuClose');
			$('.slide_nav').removeClass('menu_open');
			
		}
	}
	
	$(window).resize(function() {
		windowWidth = viewport().width;
		slideMenu(windowWidth);
	});
	
	$(window).scroll(function(){
		if($(window).scrollTop() > headerHeight) {
			if($('#fixed_header').hasClass('js_new_fixed_header') && (windowWidth > 600 || initialWindowWidth > 600)) {
				if(!$('#fixed_header').hasClass('show')) {
					$('#fixed_header').addClass('show');
					$('#fixed_header').animate({
						top: '32'
					}, 100);
				}
			} else if($('#fixed_header').hasClass('js_new_fixed_header') && (windowWidth < 600 || initialWindowWidth < 600)) {
				if(!$('#fixed_header').hasClass('show')) {
					$('#fixed_header').addClass('show');
					$('#fixed_header').animate({
						top: '46'
					}, 100);
				}
			} else {
				if(!$('#fixed_header').hasClass('show')) {
					$('#fixed_header').addClass('show');
					$('#fixed_header').animate({
						top: '0'
					}, 100);
				}
			}
		} else {
			if($('#fixed_header').hasClass('show')) {
				$('#fixed_header').removeClass('show');
				$('#fixed_header').animate({
					top: '-100'
				}, 100);
			}
		}
	});
	
	function viewport() {
	    var e = window, a = 'inner';
	    if (!('innerWidth' in window )) {
	        a = 'client';
	        e = document.documentElement || document.body;
	    }
	    return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
	}
	
});