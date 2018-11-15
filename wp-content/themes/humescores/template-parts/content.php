<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Humescores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	 <?php
	if ( has_post_thumbnail() ) { ?>
	<figure class="featured-image index-image">
		<?php
		the_post_thumbnail();
		?>
	</figure><!-- .featured-image full-bleed -->
	<?php } ?>
	 <header class="entry-header">
		<?php humescores_the_category_list(); ?>
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php humescores_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
	  the_excerpt();
		?>
	</div><!-- .entry-content -->
			<div class="continue-reading">
				<?php
       $read_more_link = sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s', 'humescores' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			)

				?>
				<a href="<?php echo esc_url( get_permalink() ) ?> " rel="bookmark">
				<?php echo $read_more_link; ?>
				</a>
			</div>
	<footer class="entry-footer">
		<?php humescores_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
