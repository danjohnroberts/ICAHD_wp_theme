<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<LINK REL="SHORTCUT ICON" HREF="<?php print get_template_directory_uri();?>/images/favicon.ico">


 


</script>

<!-- wordpress head functions -->
<?php wp_head(); ?>
<!-- end of wordpress head -->

 <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php bloginfo('template_directory');?>/library/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="<?php bloginfo('template_directory');?>/library/js/respond.min.js"></script>
    <![endif]-->
    
     <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    
</head>

<body <?php body_class(); ?>>
<div class="banner" >
  <div class="container" >
    <div class="row" >
      <div id="logo" class="col-md-4 text-center"> <a href="/"> <img class="img-responsive aligncenter" src="<?php print get_template_directory_uri();?>/images/logo3.png"> </a> </div>
      <div  class="col-md-6 logo-border"> <a href="/">
      <p > <img  class="img-responsive " src="<?php print get_template_directory_uri();?>/images/logo_text.gif ">
        <!-- The Israeli Committee Against House Demolitions</p>
 <p class="text">הוועד הישראלי נגד הריסת בתים</p>
 <p class="text">الحركة الإسرائيلية ضد هدم البيوت -->
        </p></a> </div>
      <div id="right-header" class="col-md-2  text-right " >
        <div class="donate-top"><a  href="/donate-now">donate now</a></div>
        <!-- <div class="donate-top"><a  href="/donate-now">newsletter</a></div> -->
        <div id="social" class="text-left"> <a href="https://www.facebook.com/pages/The-Israeli-Committee-Against-House-Demolitions-ICAHD/115169235224525" target="_blank"><img src="<?php print get_template_directory_uri();?>/images/social-facebook.png" alt="facebook" width="45" height="45" border="0"></a> <a href="https://twitter.com/icahdinfo" target="_blank"><img src="<?php print get_template_directory_uri();?>/images/social-twitter.png" alt="twitter" width="45" height="45"></a> </div>
        <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header') ) : ?>
        <?php //endif; ?>
      </div>
    </div>
  </div>
  <!-- End .container --> 
</div>
<!-- End .banner -->
<div class="container ">
  <header role="banner" class="margin-top-10  clearfix" >
   <?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
    <?php //ubermenu( 'main' ); ?>
  </header>
  <!-- end header --> 
</div>
<div class="container clearfix">
