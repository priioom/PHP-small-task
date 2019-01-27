(function ($) {
    "use strict";
	
	$(document).ready(function() {
       $('#banner-slider .carousel-inner .item:first-child').addClass('active');
        $('#banner-slider ol li:first-child').addClass('active');
	   
       //animate css
        new WOW().init();
        
        // Activate isotope in container
 
        $(".portfolio_items").isotope({
            itemSelector: '.single_item',
            layoutMode: 'fitRows',
        });

        // Add isotope click function

        $('.portfolio_filter li').click(function(){
            $(".portfolio_filter li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');
            $(".portfolio_items").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });
            return false;
        });
        
        // light box
        
        lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true
        })
        
        // feedback
        
        $('.owl-carousel').owlCarousel({
            autoplay:true,
            smartSpeed:2500,
            loop:true,
            margin:100,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
	});
	
	
	
})(jQuery);