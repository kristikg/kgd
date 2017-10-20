<?php
/**
 * The template used for displaying portfolio pieces on homepage.
 *
 * 
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="portfolio-thumbnail">
		<?php the_field( 'featured' ); ?>
	</div>

	<header class="entry-header">
		<a href="<?php the_field('link'); ?>" target="_blank">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</a>
	</header>
	
	<div class="entry-content">
		<h2><ul><?php echo get_the_term_list( $post->ID, 'project_type', '<li class="types">', ' | ', '</li>' ) ?></ul></h2>
		<h3><?php the_field('description'); ?></h3>
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
