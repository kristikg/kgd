<?php
/**
 * @package Dara
 */

if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

get_header(); ?>

	<div id="primary" class="content-area front-page-content-area">
		<p> Website Coming Soon!</p>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'components/page/content', 'frontpage' ); ?>

			<?php // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>
		<?php endwhile; ?>
	</div><!-- #primary -->

<!-- delete Featured Pages area from homepage
	<?php dara_featured_pages(); ?> 


<!-- PORTFOLIO PIECES this is the old code for Jetpack CPT -->
	<?php
		$portfolio = new WP_Query( array(
			'post_type'      => 'my_portfolio',
			'order'          => 'DESC',
			'posts_per_page' => 2,
			'no_found_rows'  => true,
		) );
	?>

	<?php if ( $portfolio->have_posts() ) : ?>
	<div class="front-portfolio">
		<div class="front-portfolio-piece">
		<?php
			while ( $portfolio->have_posts() ) : $portfolio->the_post();
				 get_template_part( 'components/portfolio/content', 'myportfolio' );
			endwhile;
			wp_reset_postdata();
		?>
		</div>
	</div><!-- .portfolio pieces -->
	<?php endif; ?>


<!-- TESTIMONIALS -->
	<?php
		$orderby = get_theme_mod( 'dara_testimonials', false );

		if ( true == $orderby ) {
			$orderby = 'rand';
		}
		else {
			$orderby = 'date';
		}

		$testimonials = new WP_Query( array(
			'post_type'      => 'jetpack-testimonial',
			'order'          => 'DESC',
			'orderby'        => $orderby,
			'posts_per_page' => 2,
			'no_found_rows'  => true,
		) );
	?>

	<?php if ( $testimonials->have_posts() ) : ?>
	<div id="front-page-testimonials" class="front-testimonials testimonials">
		<div class="grid-row">
		<?php
			while ( $testimonials->have_posts() ) : $testimonials->the_post();
				 get_template_part( 'components/testimonials/content', 'testimonial' );
			endwhile;
			wp_reset_postdata();
		?>
		</div>
	</div><!-- .testimonials -->
	<?php endif; ?>

<?php get_sidebar( 'footer' ); ?>
<?php get_footer();

endif;
