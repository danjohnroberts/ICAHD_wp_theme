	jQuery(document).ready(function($) {
  
    // Fixa navbar ao ultrapassa-lo
    var navbar = $('#icahd-bootstrap-menu'),
    		distance = navbar.offset().top,
        $window = $(window);

    $window.scroll(function() {
		
		
		
        if ($window.scrollTop() >= distance) {
            navbar.removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
			
			 $("#icahd-bootstrap-menu").removeClass('shadow').addClass('shadow');
			 
			 $("#icahd-bootstrap-menu").css("margin-top", "10px").css("margin-top", "0px");
			 
			 
			 $("a.sticky-logo").css("display", "none").css("display", "initial");
		
          	//$("body").css("padding-top", "70px");
        } else {
            navbar.removeClass('navbar-fixed-top');
            //$("body").css("padding-top", "0px");
			$("#icahd-bootstrap-menu").css("margin-top", "10px");
			 $("#icahd-bootstrap-menu").removeClass('shadow')
			  $("a.sticky-logo").css("display", "none");
			
			
			
		
        }
    });
});