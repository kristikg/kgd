<?php
/**
 * The template used for displaying portfolio pieces on homepage.
 *
 * 
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="portfolio-thumbnail">
				<?php the_post_thumbnail( 'medium' ); ?>
			</div>
		<?php endif; ?>

	<header class="entry-header">
		<a href="<?php the_field('link'); ?>" target="_blank"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></a>
	</header>
	
	<div class="entry-content">
		<h3><?php the_content(); ?></h3>
	</div>

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'dara' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
	?>
</article><!-- #post-## -->
