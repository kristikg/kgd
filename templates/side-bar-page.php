<?php
/**
 * Template Name: Page w/ Sidebar
 *
 *
 *
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'components/page/content', 'hero' ); ?>

	<?php endwhile; ?>

	<?php rewind_posts(); ?>

	<div class="content-wrapper <?php echo esc_attr( dara_additional_class() ); ?>">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'components/page/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- .site-main -->
		</div><!-- .content-area -->
		<?php get_sidebar(); ?>
	</div><!-- .content-wrapper -->
<?php  get_footer();
