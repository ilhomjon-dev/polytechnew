<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Unicamp
 * @since   1.0.0
 * @version 1.3.0
 */

defined( 'ABSPATH' ) || exit;
?>
<div id="page-content" class="page-content">
	<div class="container">
		<div class="row">

			<?php Unicamp_Sidebar::instance()->render( 'left' ); ?>

			<div id="page-main-content" class="page-main-content">

				<?php while ( have_posts() ) : the_post(); ?>
					<?php unicamp_load_template( 'global/content-rich-snippet' ); ?>

					<?php if ( ! unicamp_has_elementor_template( 'single' ) ) : ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h2 class="screen-reader-text"><?php echo esc_html( get_the_title() ); ?></h2>
							<?php
							the_content();

							Unicamp_Templates::page_links();
							?>
						</article>
					<?php endif; ?>
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
				<?php endwhile; ?>

			</div>

			<?php Unicamp_Sidebar::instance()->render( 'right' ); ?>

		</div>
		<div class='info-box'>
		
	
		
		
	<?
	if (get_the_author()) {
    // Get the author ID
    $author_id = get_the_author_meta('ID');

    // Get the full name of the author
    $author_full_name = get_the_author_meta('last_name', $author_id) . ' ' .get_the_author_meta('first_name', $author_id);

    // If full name is not available, fall back to display name
    if (empty($author_full_name)) {
        $author_full_name = get_the_author();
    }

    // Output the author name
    echo '<span class="notItalic" >Шахсони масъули ин қисми сомона: </span><span>' . $author_full_name.'</span>';
} else {
    // If no author is found
    echo 'Author not found';
}?>
		
		</div>
	</div>
	
</div>
