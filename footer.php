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
          	//$("body").css("padding-top", "70px");
        } else {
            navbar.removeClass('navbar-fixed-top');
            //$("body").css("padding-top", "0px");
			$("#icahd-bootstrap-menu").css("margin-top", "0px");
        }
    });
});

</script>

	</body>

</html>
