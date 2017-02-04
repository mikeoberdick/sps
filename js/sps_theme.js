jQuery(document).ready(function(){

jQuery("#hpSliders").owlCarousel({
	autoplay: true,
	autoplaySpeed:500,
	autoplayTimeout:5000,
	items: 1,
	loop: true,
animateOut: "fadeOut"

});

jQuery("#logoCarousel").owlCarousel({
	autoplay: true,
	autoplaySpeed:1000,
	autoplayTimeout:1500,
autoplayHoverPause:true,
	margin: 10,
	//items: 4, 
	 responsive : {
          0 : {
              items: 1
          },
          768 : {
              items: 3
          },
          960 : {
              items: 4
          },
          1200 : {
              items: 5
          },
          1920 : {
              items: 6
          }
      },
	loop: true,
	dots: false

});

jQuery("#testimonialCarousel").owlCarousel({
	autoplay: false,
	items: 1,
	center: true,
	loop: true,
	autoHeight: true
});

});



	jQuery(document).ready(function(){
		
		jQuery(".gallery").featherlightGallery();

		AOS.init();
		});