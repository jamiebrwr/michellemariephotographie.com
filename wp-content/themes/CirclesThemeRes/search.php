<?php get_header(); ?>
<script type="text/javascript">
$(document).ready(
function($){
  $('#posts_cont').infinitescroll({
 
    navSelector  : "div.load_more_text",            
		   // selector for the paged navigation (it will be hidden)
    nextSelector : "div.load_more_text a:first",    
		   // selector for the NEXT link (to page 2)
    itemSelector : "#posts_cont .home_tall_box"
		   // selector for all items you'll retrieve
  },function(arrayOfNewElems){
  
      //$('.home_post_cont img').hover_caption();
 
     // optional callback when new content is successfully loaded in.
 
     // keyword `this` will refer to the new DOM content that was just added.
     // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
     //                   all the new elements that were found are passed in as an array
 
  });  
}  
);
</script>	
	<h3 class="top_title">
        <?php if (is_category()) { ?>
              <?php single_cat_title(); ?>
        <?php } elseif( is_tag() ) { ?>
              <?php single_tag_title(); ?>
        <?php } elseif (is_day()) { ?>
              <?php the_time('F jS, Y'); ?>
        <?php } elseif (is_month()) { ?>
              <?php the_time('F, Y'); ?>
        <?php } elseif (is_year()) { ?>
              <?php the_time('Y'); ?>
        <?php } elseif (is_author()) { ?>
              Author Archive
        <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
              Blog Archives
        <?php } ?>   
    </h3>
	<?php $shortname = "studio_gallery"; ?>
	<section id="content" class="none_home_cont">
	
		<div id="posts_cont">
			<?php
			global $wp_query;
			$args = array_merge( $wp_query->query, array( 'posts_per_page' => 9 ) );
			query_posts( $args );        
			$x = 0;
			while (have_posts()) : the_post(); ?>                    		
				
				<?php if($x == 2) { ?>
				<div class="home_tall_box home_tall_box_last">
				<?php } else { ?>
				<div class="home_tall_box">
				<?php } ?>
				
				<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
						<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>
					<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
						<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=085e17" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<?php } else { ?>
				
				
								
						<a href="<?php the_permalink(); ?>"class="img_hover_trans"><?php the_post_thumbnail('home-tall-image'); ?></a>
					<?php } ?>			
					
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
				</div><!--//home_tall_box-->			
				
				<?php if($x == 2) { echo '<div class="clear"></div>'; $x = -1; } ?>
			
			<?php $x++; ?>
			<?php endwhile; ?>            		
			
			<div class="clear"></div>		
		</div>
		<div class="clear"></div>
		
		 <div class="load_more_cont">
        <div align="center"><div class="load_more_text">
        
        <?php
        
        ob_start();
	next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/loading-button.png" />');
	$buffer = ob_get_contents();
	ob_end_clean();
	if(!empty($buffer)) echo $buffer;
        ?>
        
        </div></div>
    </div><!--//load_more_cont-->      		
    
    <div class="clear"></div>
		
		<div class="cat_nav_cont" style="display: none;">
			<div class="left"><?php previous_posts_link('[ &lt; ] Previous') ?></div>
			<div class="right"><?php next_posts_link('Next [ &gt; ]') ?></div>
			<div class="clear"></div>
		</div><!--//cat_nav_cont-->
		
	</section><!--//content-->
	
<?php get_footer(); ?>           	