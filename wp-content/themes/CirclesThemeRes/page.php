<?php get_header(); ?>
	<?php $shortname = "studio_gallery"; ?>
	
	<section id="content" class="none_home_cont">
	
		<section id="content_left">
		
			<article>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>          
					<h1 class="single_title"><?php the_title(); ?></h1>
					<div class="single_inside_content">
					
					<?php the_content(); ?>
					
					</div><!--//single_inside_content-->
					<br /><br />
					
					<?php //comments_template(); ?>
				<?php endwhile; else: ?>
					<h3>Sorry, no posts matched your criteria.</h3>
				<?php endif; ?>                    
				<div class="clear"></div>
			</article><!--//blog_box-->
			
		</section><!--//content_left-->
		
		<?php get_sidebar(); ?>
		
		<div class="clear"></div>
		
	</section><!--//content-->
	
<?php get_footer(); ?>            	