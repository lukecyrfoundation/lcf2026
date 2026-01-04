<?php
/**
 * Template Name: Poems Page
 * Description: Displays only posts from the "poems" category.
 */

get_header();

// You can change this to use the slug or ID of your "poems" category
$category_slug = 'poem';
$paged = get_query_var('paged') ?: 1;

$args = [
	'post_type' => 'post',
	'posts_per_page' => 10,
	'paged' => $paged,
	'category_name' => $category_slug,
];

$query = new WP_Query($args);
?>

<main class="container py-4">
    <h1 class="mb-4"><?php the_title(); ?></h1>

	<?php if ( $query->have_posts() ) : ?>
        <div class="row row-cols-1 row-cols-md-2 g-4">
	        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col">
                    <a href="<?php the_permalink(); ?>" class="text-decoration-none text-reset h-100 d-block">
                        <article class="card h-100 card-hover">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                            </div>
                            <div class="card-footer text-muted small">
                                Posted on <?php echo get_the_date(); ?>
                            </div>
                        </article>
                    </a>
                </div>
	        <?php endwhile; ?>
        </div>

        <div class="mt-4">
			<?php
			echo paginate_links([
				'total' => $query->max_num_pages,
			]);
			?>
        </div>

		<?php wp_reset_postdata(); ?>
	<?php else : ?>
        <p>Poems at this time.</p>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
