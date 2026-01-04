<?php
/**
 * Default Page Template
 *
 * Template for displaying all pages
 *
 * @package Luke_Cyr_Foundation
 */

get_header();
?>

    <main class="container py-5">
		<?php
		while ( have_posts() ) :
			the_post();
			?>

            <article id="page-<?php the_ID(); ?>" <?php post_class( 'mb-4' ); ?>>

                <header class="page-header mb-4">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lcf' ),
							'after'  => '</div>',
						)
					);
					?>
                </div><!-- .page-content -->

            </article><!-- #page-<?php the_ID(); ?> -->

		<?php

		endwhile; // End of the loop.
		?>
    </main><!-- .container -->

<?php
get_footer();
