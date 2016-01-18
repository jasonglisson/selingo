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
	
	$('.book-carousel').slick({
	  centerMode: true,
	  centerPadding: '60px',
	  slidesToShow: 2,
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
	        slidesToShow: 1
	      }
	    }
	  ]
	});
	

});