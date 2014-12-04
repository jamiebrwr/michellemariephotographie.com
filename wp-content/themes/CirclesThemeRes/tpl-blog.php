<?php
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>
	<?php $shortname = "studio_gallery"; ?>
	
	<section id="content" class="none_home_cont">
	
		<section id="content_left">
		
			<?php
			$args = array(
				 'category_name' => 'blog',
				 'post_type' => 'post',
				 'posts_per_page' => 4,
				 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
				 );
			query_posts($args);
			while (have_posts()) : the_post(); ?> 
		
				<article class="blog_box">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
					<p>
					<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
						<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>
					<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
						<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=085e17" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<?php } else { ?>				
						<a href="<?php the_permalink(); ?>"class="img_hover_trans"><?php the_post_thumbnail('blog-image'); ?></a>
					<?php } ?>	
					
					</p>
					
					<p><?php the_time('F d, Y'); ?></p>
					
					<p><?php echo ds_get_excerpt('430'); ?></p>
					
					
					<div class="clear"></div>
				</article><!--//blog_box-->
				
			<?php endwhile; ?>
			
			<div class="cat_nav_cont">
				<div class="left"><?php previous_posts_link('[ &lt; ] Previous') ?></div>
				<div class="right"><?php next_posts_link('Next [ &gt; ]') ?></div>
				<div class="clear"></div>
			</div><!--//cat_nav_cont-->			
			
			<?php wp_reset_query(); ?>
		
		</section><!--//content_left-->
		
		<?php get_sidebar(); ?>
		
		<div class="clear"></div>
		
	</section><!--//content-->
	
<?php get_footer(); ?>            	