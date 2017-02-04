jQuery(function () {
		
	var filterList = {
	
		init: function () {
		
			// MixItUp plugin
			// http://mixitup.io
			jQuery('#portfoliolist').mixItUp({
				selectors: {
  			  target: '.portfolio',
  			  filter: '.filter'	
  		  },
  		  load: {
    		  filter: '.all' // show all on first load
    		}     
			});								
		
		}

	};
	
	// Run the show!
	filterList.init();
	
});