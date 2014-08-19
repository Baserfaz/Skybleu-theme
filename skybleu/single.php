
	<?php get_header(); ?>

	<div class="content-main">
	
		<div class="container">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div class="twelve columns">
			
				<div class="post-main clearfix">
					
					<div class="ten columns alpha">
					
						<div class="post-title">
							
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							
						</div>
							
					</div>
						
					<!-- <div class="two columns alpha omega">
						
						<div class="comment-counter">
							
							<?php comments_popup_link('0 Comments', 'One Comment', '% Comments'); ?> 
							
						</div>
						
					</div> -->
					
					<div class="twelve columns alpha omega">
					
						<div class="author-main">
						
							<h4>By <?php the_author_posts_link(); ?> - Posted: <?php the_time('F jS, Y'); ?> - <span><?php comments_popup_link('0 Comments', 'One Comment', '% Comments'); ?></span></h4>
						
						</div>
					
					</div>
					
					<div class="twelve columns alpha omega">
					
						<div class="post-figure">
						
							<a href="<?php the_permalink(); ?> "><?php the_post_thumbnail(); ?></a>
						
						</div>
						
					</div>
				
					<div class="twelve columns alpha omega">
					
						<div class="post-text">
						
							<p><?php the_content(); ?></p>
							<p><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
						
						</div>
				
					</div>
				
				</div><!-- end post-main -->
			
				<div class="twelve columns">
				
					<div class="pagination">
						
						<ul>
							
							<li class="newer"><?php previous_post_link(); ?></li>
							<li class="older"><?php next_post_link(); ?></li>
							
						</ul>
						
					</div>
				
				</div>
			
			</div>
			
			<?php get_sidebar(); ?>
			
			<div class="twelve columns">
				
				<div class="comments-main">
				
					<?php comments_template(); ?>
					
				</div>
			
			</div>
			
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			
		</div>
		
	</div><!-- end content -->

	<?php get_footer(); ?>
	