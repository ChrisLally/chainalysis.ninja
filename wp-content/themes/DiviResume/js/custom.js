(function ($) {

    "use strict";


        // Parallax Js
        function initParallax() {
          $('#home').parallax("50%", 20);
          $('#aboutus').parallax("50%", 50);
          $('#whatwedo').parallax("50%", 10);
          $('#getquote').parallax("50%", 40);
          $('#portfolio').parallax("50%", 20);
          $('#contactus').parallax("50%", 50);
          }
        initParallax();
		
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       false,       // trigger animations on mobile devices (default is true)
			live:         true,       // act on asynchronously loaded content (default is true)
			callback:     function(box) {
			  // the callback is fired every time an animation is started
			  // the argument that is passed in is the DOM node being animated
			},
			scrollContainer: null // optional scroll container selector, otherwise use window
		  }
		);
		wow.init();
		
		jQuery('#contactus button.et_pb_contact_submit').text("Send Message");


})(jQuery);
