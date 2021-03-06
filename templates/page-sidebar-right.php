<?php
/**
 * Template Name: Sidebar - Right
 * 
 * The template for displaying pages with the sidebar right.
 *
 */

get_header(); ?>

	<div class="row">
		<div class="col-sm-8">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</div>

		<div class="col-md-3 col-md-offset-1 col-sm-4">
			
			<?php get_sidebar(); ?>
		
		</div><!-- /sidebar -->
	</div><!-- /.row -->

<?php get_footer(); ?>
