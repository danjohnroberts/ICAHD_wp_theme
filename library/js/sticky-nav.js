	jQuery(document).ready(function($) {
  
    var navbar = $('#icahd-bootstrap-menu'),
    	distance = navbar.offset().top,
        $window = $(window);
		$window.scroll(function() {
		
		
        if ($window.scrollTop() >= distance) {
            
		navbar.addClass('navbar-fixed-top');
		$("#icahd-bootstrap-menu").addClass('sticky-shadow');
			 
	
        } else {
            navbar.removeClass('navbar-fixed-top');
			$("#icahd-bootstrap-menu").removeClass('sticky-shadow')

		
        }
    });
});