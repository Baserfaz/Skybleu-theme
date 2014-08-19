
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
						
					<!--<div class="two columns alpha omega">
						
						<div class="comment-counter">
							
							<?php comments_popup_link('0 Comments', 'One Comment', '% Comments'); ?> 
							
						</div>
						
					</div>-->
					
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
						
							<p><?php the_excerpt(); ?></p>
							<p><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
						
						</div>
				
					</div>
				
					<div class="twelve columns alpha omega">
					
						<div class="read-more-button">
						
							<a href="<?php the_permalink(); ?>">Read More &gt;&gt;</a>
						
						</div>
					
					</div>
				
				</div><!-- end post-main -->
			
			</div>
			
			<?php get_sidebar(); ?>
			
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			
			<div class="twelve columns">
			
				<nav class="pagination">
					
					<?php global $wp_query;
						$total_pages = $wp_query -> max_num_pages;
						if ($total_pages > 1){
							$current_page = max(1, get_query_var('paged'));
							echo paginate_links(array(
								'base' => get_pagenum_link(1). '%_%',
								'format' => 'page/%#%',
								'current' => $current_page,
								'total' => $total_pages,
								'prev_next' => False,
								'type' => 'list'
							));
						} 
					?>
					
				</nav>
			
			</div>
			
		</div>
		
	</div><!-- end content -->

	<?php get_footer(); ?>
	