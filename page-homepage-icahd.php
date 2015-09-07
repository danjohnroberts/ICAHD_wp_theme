<?php
/*
Template Name: Homepage-icahd
*/
?><?php get_header(); ?>

<div class="row margin-top-10">
  <div class="col-md-9">
    <?php 
    echo do_shortcode("[metaslider id=180]"); 
?>
  </div>
  <div  id="front_links" class="col-md-3">
    <ul >
     <!-- <li><a href="/donate-now"><strong>Donate Now</strong><span>Support our efforts to build
        peace in palestine</span></a></li> -->
      <li><a href="/tours"><strong>Tours</strong><span></span></a></li>
      <li><a href="join-us"><strong>Join Us</strong><span>Icahd Work</span></a></li>
      <li><a href="/publications"><strong>recent publications</strong></a></li>
      <li><a href="/News Letter"><strong>News Letter</strong></a></li>
    </ul>
  </div>
</div>
<!-- class="row margin-top-10 -->

<div class="row margin-top-10">
  <div class="col-md-3 "> 
    <!--  <div class="clearfix frontpage-section"> -->
    <div class=" did-you-know">
    <div class="top">
      <h2>did you know that?</h2>
  
   </div>
   <div class="bottom">
    <h3> So far in 2015</h3>
<h4>294</h4>
<p>STRUCTURES DEMOLISHED IN OPT</p>
<h4>251</h4>	
<p>PEOPLE DISPLACED</p>
<h4>46,394</h4>
<p>STRUCTURES DEMOLISHED SINCE 1967 IN OPT
</p>
   </div>
    </div>
  </div>
  <div class="col-md-9 " id="frontpage-news_scroller">
    <div class="frontpage-news_scroller">
    
     <H2><a href="/icahd-news/">News &amp; Updates</a></H2>
  <?php //echo do_shortcode('[su_carousel source="posts: recent" height="150"]'); ?>
  <?php if(function_exists('wa_rhps')){ echo wa_rhps(1);} ?>
  <?php echo do_shortcode('[carousel-horizontal-posts-content-slider-pro id=5667]');?>
    </div>
  </div>
</div>

<div class="row margin-top-10 ">
  <div class="col-md-8  ">
    <div class="frontpage-midsection">
      <h2>Extended Study Tours</h2>
      <div>
     <img class="pull-left img-responsive" src="wp-content/uploads/2014/10/tour.jpg" alt="A cookie">
      <h3 id="page-title">Running throughout the year</h3>
   
                    <p >ICAHD's alternative tours programme includes in-depth study tours which go beyond the traditional tourist sites as the political realities that affect Palestinians and Israelis are explored. Participants witness the situation on both sides of the divide and travel to different geographical areas. Unique opportunities are provided to meet ICAHD staff and other key leaders to gain first-hand, in-depth knowledge and some of the latest analysis. Participants also meet extensively with Palestinians to hear their stories.</p>
         
      See more at: <a href="http://www.icahd.org/tours/extended-study" target="_blank">www.icahd.org/tours/extended-study 20</a></div>
    </div>
  </div>
  <div class="col-md-4"> 
    <!-- Begin MailChimp Signup Form -->
   
   
    <div id="mc_embed_signup" class="frontpage-subscribe">
     <form action="//icahd.us11.list-manage.com/subscribe/post?u=3f597200e2e8ee5767dd20dfa&amp;id=90b5ed07e2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
     
          <h2>Subscribe to our NewsLetter</h2>
          <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
          <div class="mc-field-group">
            <label for="mce-EMAIL">Email Address <span class="asterisk">*</span> </label>
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
          <div class="mc-field-group">
            <label for="mce-FNAME">First Name </label>
            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
          </div>
          <div class="mc-field-group">
            <label for="mce-LNAME">Last Name </label>
            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
          </div>
        
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;">
            <input type="text" name="b_a3728e1a8014d53820403ca12_06adf561a8" tabindex="-1" value="">
          </div>
          <div class="clear">
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
          </div>
       
      </form>
    </div>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script> 
    <!--End mc_embed_signup--> 
  </div>
</div>
</div>
<?php get_footer(); ?>
