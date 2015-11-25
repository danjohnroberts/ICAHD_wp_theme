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
					
					<p class="pull-right" style="font-size:12px">ICAHD UK Ltd is a not-for-profit Company Limited by Guarantee – Registration Number 6060984</p>
			
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
        


<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js?ver=9622850c98e852fb594b2e25db8c4237'></script>

	<script>
      $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 20) {
          $(".test").removeClass("hide");
		  $(".navbar-header").addClass("hide");
        } else {
          $(".test").addClass("hide");
		   $(".navbar-header").removeClass("hide");
		 
		  
        }
      });
    </script>
    
    <style>
	
	.hide {
	dipslay: none	
	}
	
	.test {
	
	}
	
	</style>


	</body>

</html>
