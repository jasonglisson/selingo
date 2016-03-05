jQuery(document).foundation();
/* 
These functions make sure WordPress 
and Foundation play nice together.
*/

jQuery(document).ready(function($) {
    
    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();
    
	 // Makes sure last grid item floats left
	jQuery( '.archive-grid .columns' ).last().addClass( 'end' );
	
	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery( 'iframe[src*="youtube.com"], iframe[src*="vimeo.com"]' ).wrap("<div class='flex-video'/>");
	
	$('.book-carousel-section').show();
	
	if($('.book-item').length <= 3) {
	  $('.books-left, .books-right').hide();
	}	
	
	$('.book-carousel').slick({
	  centerMode: true,
	  centerPadding: '60px',
	  slidesToShow: 3,
		arrows: true,
	  dots: false,		
	  infinite: true,  
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: true,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: true,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 1,
				  slidesToScroll: 1,
				  autoplay: true,
				  autoplaySpeed: 4000,	        
	      }
	    }
	  ]
	});

	$('.books-left').click(function(){
		$('.book-carousel .slick-prev')[0].click();
	});

	$('.books-right').click(function(){
		$('.book-carousel .slick-next')[0].click();
	});
	
	$('.book-item').mouseenter(function(event){
		$(this).find('.book-info').fadeIn(150);
	});
	
	$('.book-info').on('mouseleave', function(event){
		$(this).delay(150).fadeOut(150);
	});	

	$('.book-info').click(function(){
		$(this).find('a')[0].click();
	});

	$('.book-blurb-carousel').fadeIn();

	$('.book-blurb-carousel').slick({
	  dots: false,
	  infinite: true,
	  speed: 500,
	  autoplay: true,
	  autoplaySpeed: 7500,
	  slidesToShow: 1,
	  fade: true,
	  adaptiveHeight: true
	});
	
	$('.blurb-left').click(function(){
		$('.book-blurb-carousel .slick-prev')[0].click();
	});

	$('.blurb-right').click(function(){
		$('.book-blurb-carousel .slick-next')[0].click();
	});

	$('.speaking-left').click(function(){
		$('.slick-prev')[0].click();
	});

	$('.speaking-right').click(function(){
		$('.slick-next')[0].click();
	});

	$('.videos').slick({
	  slidesToShow: 1,
		arrows: true,
	  dots: false,		
	  infinite: true,  
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: true,
					dots: false,		        
	        slidesToShow: 1,
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: true,
					dots: false,			        
	        slidesToShow: 1,
				  slidesToScroll: 1,
				  autoplay: false,
				  autoplaySpeed: 4000,	        
	      }
	    }
	  ]
	});
	
	$('.talk-left').click(function(){
		$('.book-talks-section .slick-prev')[0].click();
	});

	$('.talk-right').click(function(){
		$('.book-talks-section .slick-next')[0].click();
	});	
	
	$('.book-talks-slider').slick({
	  slidesToShow: 3,
		arrows: true,
	  dots: false,		
	  infinite: false,  
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: true,
					dots: false,		        
	        slidesToShow: 1,
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: true,
					dots: false,			        
	        slidesToShow: 1,
				  slidesToScroll: 1,
				  autoplay: false,
				  autoplaySpeed: 4000,	        
	      }
	    }
	  ]
	});
	
	$('.back-to-top').click(function() {
	    $('html, body').animate({
	        scrollTop: $('html, body').offset().top
	    }, 1000);
	});	

	//store the element
	var $top = $('.back-to-top');
	var $swipe = $('.swipe');
		
	//store the initial position of the element
	$(window).scroll(function(){
	    if($(document).scrollTop() > 200) {
		  // if so, ad the fixed class
		  $top.addClass('show');		  
		  $top.fadeIn();
		} else {
		  // otherwise remove it
		  $top.removeClass('show');		
		  $top.fadeOut();	   	  
		}		
	});
	
	//store the initial position of the element
	$(window).scroll(function(){
	    if($(document).scrollTop() >= -400) {
		  // if so, ad the fixed class	  
			$swipe.fadeIn(function() {
			  window.setTimeout(function() {
			    $swipe.fadeOut(800 ,function(){
						$swipe.remove();
					});		    
			  }, 2500);
			});		  
		  
		} 
	});	
	
});