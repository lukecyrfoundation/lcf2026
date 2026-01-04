<?php
get_header(); ?>

<section class="bg-white py-5">
    <div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			if ( in_category( 'poem' ) ) {
				// Load custom poem layout
				get_template_part( 'templates/content/poem' );
			} else {
				// Default single post layout
				get_template_part( 'templates/content/single' );
			}
		endwhile;
		else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?></p>
		<?php endif; ?>
    </div>
</section>


<?php get_footer(); ?>
