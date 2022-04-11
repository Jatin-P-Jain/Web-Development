$(document).ready(function(){
	
	$('.js--features').waypoint(function(direction){
		if (direction == "down") {
			$('nav').addClass('sticky');
		}
		else {
			$('nav').removeClass('sticky');
		}
	}, 
	{ 
		offset: '80px;'
	});
	
	$('.js--scroll-plans').click(function() {
		$('html,body').animate({scrollTop: $('.js--plans').offset().top}, 1200);
	});
	$('.js--scroll-features').click(function() {
		$('html,body').animate({scrollTop: $('.js--features').offset().top}, 800);
	});
	
	$(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
	
	$('.js--wp-1').waypoint(function(direction){
		$('.js--wp-1').addClass('animated bounceInDown');
	},{
		offset:'65%;'
	});
	$('.js--wp-2').waypoint(function(direction){
		$('.js--wp-2').addClass('animated bounceInUp');
	},{
		offset:'65%;'
	});
	$('.js--wp-3').waypoint(function(direction){
		$('.js--wp-3').addClass('animated fadeInUpBig');
	},{
		offset:'65%;'
	});
	$('.js--wp-4').waypoint(function(direction){
		$('.js--wp-4').addClass('animated shake');
	},{
		offset:'70%;'
	});
	
	$('.js--nav-icon').click(function() {
		var nav = $('.js--main-nav');
		var icon = $('.js--nav-icon i');
		nav.slideToggle(400);
		if(icon.hasClass('ion-navicon-round'))
			{
				icon.addClass('ion-close-round');
				icon.removeClass('ion-navicon-round');
			}
		else{
			    icon.addClass('ion-navicon-round');
				icon.removeClass('ion-close-round');
		}
	});
	
	
});