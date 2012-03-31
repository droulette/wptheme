<?php get_header(); ?>
	<div id="main">
			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
				</div><!-- #nav-above -->
			<?php endif; ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><a href="<?php echo the_permalink(); ?>">
						<?php the_title(); ?>
					</a></h2>
					<div class="meta">
					  <em><p>Posted by <?php the_author_posts_link(); ?>
					  on <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a>
					  in <?php the_category( ', ' ); ?><?php the_tags( ', ' ); ?></p></em>
					</div><!-- meta -->
					<?php the_content(); ?>
					<?php comments_template(); ?>
				<?php endwhile; endif; ?>
	</div><!-- #main -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
