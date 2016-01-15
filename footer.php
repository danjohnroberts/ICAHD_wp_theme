		</div> <!-- end #container -->
        	<footer role="contentinfo" class="footer">
            
           
            
            <div class="container  margin-top-10">
			
				 
		         
		          <div id="widget-footer" class="clearfix ">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
                      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
		            <?php endif; ?>
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer5') ) : ?>
		            <?php endif; ?>
                     <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer6') ) : ?>
		            <?php //endif; ?>
		          </div>
					
				<diV class="container  ">
                
                <div class="row margin-top-10">
					
					<p class="pull-right" style="font-size:12px"><?= get_theme_mod('icahd_footer_extra') ?></p>
			
					<p style="font-size:12px" class="attribution">&copy; <?php bloginfo('name'); ?> 2015</p>
                    
                    
                       </diV>
                    </diV>
				
				</div> <!-- end #inner-footer -->
                

                
             
				
			</footer> <!-- end footer -->
		
		
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
        
        <script>
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

</script>

<style>
.shadow {
border-bottom: 0;
-webkit-box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.75);
box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.75);

transition: all 0.5s ease-out;
}
#icahd-bootstrap-menu, .navbar-fixed-top
{
transition: all 0.2s ease-out;
}

.donate-top a {
	
	font-weight: bold!important;
	    padding: 12px 20px 0 0;
}

.donate-top a:hover {
text-decoration: none;
color: #ccc	
}



</style>

	</body>

</html>
