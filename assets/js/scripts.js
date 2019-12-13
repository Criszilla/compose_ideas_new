( function( $ ) {
    /////// OWL CAROUSEL ////////
    //Slider Home
    $('#slider_home').owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
		center: false,
        rewind: false,
        mouseDrag: true,
		touchDrag: true,
		pullDrag: true,
        freeDrag: false,
        merge: false,
		mergeFit: true,
        autoWidth: false,
        startPosition: 0,
		rtl: false,
        margin: 0,
        stagePadding: 0,
        smartSpeed: 250,
		fluidSpeed: false,
		dragEndSpeed: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
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
    });

    

} )( jQuery );