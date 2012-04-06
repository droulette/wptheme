<?php get_header(); ?>

<div id="page">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h1 class="entry-title"><?php the_title(); ?></h1>

						<?php the_content(); ?>
						
						<?php endwhile; // end of the loop. ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>