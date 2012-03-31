<?php get_header(); ?>

			<div id="content" role="main">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				  <div <?php post_class(); ?>>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
					<?php if ( !is_singular() && get_the_title() == '' ) : ?>
					  <a href="<?php the_permalink(); ?>">(more...)</a>
					<?php endif; ?>
					<?php if ( is_singular() ) : ?>
					  <div class="pagination"><?php wp_link_pages(); ?></div>
					<?php endif; ?>
					<div class="clear"> </div>
				  </div><!-- post_class() -->
				  <?php if ( is_singular() ) : ?>
					<div class="meta">
					  <p>Posted by <?php the_author_posts_link(); ?>
					  on <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a>
					  in <?php the_category( ', ' ); ?><?php the_tags( ', ' ); ?></p>
					</div><!-- meta -->
					<?php comments_template(); ?>
				  <?php endif; ?>
				<?php endwhile; else: ?>
				  <div class="hentry"><h2>Sorry, the page you requested cannot be found</h2></div>
				<?php endif; ?>
							
				
				

				<div class="clear"> </div>
			</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
