<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<meta charset="utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->              	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.infinitescroll.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
	
	<script language="javascript">
$(document).ready(function(){
  // Add the hover handler to the link
  $(".img_hover_trans").hover(
    function(){ // When mouse pointer is above the link
      // Make the image inside link to be transparent
      $(this).find("img").animate(
        {opacity:".5"},
        {duration:300}
      );
    },
    function(){ // When mouse pointer move out of the link
      // Return image to its previous state
      $(this).find("img").animate(
        {opacity:"1"},
        {duration:300}
      );
    }
  );
});
</script>
	
</head>
<body>
<?php $shortname = "studio_gallery"; ?>
<?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
<style type="text/css">
  body { background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>; }
</style>
<?php } ?>
<div id="main_container">
	<header>
		
		<div class="header_top_cont_spacer"></div>
		<div class="header_top_cont">
			<div class="container">
				<div class="left">
					<div class="header_menu">
						<?php wp_nav_menu('menu=header_menu&container=false&menu_id='); ?>
						<div class="clear"></div>
					</div><!--//header_menu-->
					<div class="clear"></div>
				</div>
			
				<div class="right">
					<div class="header_social">
						<?php if(get_option($shortname.'_twitter_link','') != "") { ?>
							<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>
						<?php } ?>
						<?php if(get_option($shortname.'_facebook_link','') != "") { ?>
							<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="facebook" /></a>
						<?php } ?>
						<?php if(get_option($shortname.'_google_plus_link','') != "") { ?>
							<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" alt="google plus" /></a>
						<?php } ?>
						<?php if(get_option($shortname.'_dribbble_link','') != "") { ?>
							<a href="<?php echo get_option($shortname.'_dribbble_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.png" alt="dribbble" /></a>
						<?php } ?>
						<?php if(get_option($shortname.'_pinterest_link','') != "") { ?>
							<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>
						<?php } ?>
						<div class="clear"></div>
					</div><!--//header_social-->		
					<div class="clear"></div>
				</div><!--//right-->		
				<div class="clear"></div>
				
			</div><!--//container-->
			
		</div><!--//header_top_cont-->
		<div class="logo_cont">
			<?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_logo_url',''))); ?>" class="logo" alt="logo" /></a>
			<?php } else { ?>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" class="logo" alt="logo" /></a>
			<?php } ?>	
			<div class="clear"></div>
		</div><!--//logo_cont-->
		
	</header>