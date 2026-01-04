<?php
/**
 * Template Name: Posts by Category (News, Blog)
 * This template displays posts from multiple categories (news, blog).
 */

get_header(); ?>

<section class="bg-white py-5">
	<div class="container">
		<h1 class="mb-4 text-center"><?php the_title(); ?></h1>

		<?php
		$args = [
			'post_type' => 'post',
			'posts_per_page' => -1,
			'category_name' => 'news,blog',
			'orderby' => 'date',
			'order' => 'DESC'
		];

		$query = new WP_Query($args);

		if ($query->have_posts()) :
		$post_count = 0;

		while ($query->have_posts()) : $query->the_post();
		if ($post_count === 0) : ?>
        <!-- Most Recent Post: Card with consistent style -->
        <div class="card mb-5">
            <div class="row g-0 align-items-stretch">
                <!-- Thumbnail Image -->
                <div class="col-12 col-lg-8 order-1 order-lg-2">
                    <a href="<?php the_permalink(); ?>" class="d-block h-100">
                        <div class="ratio ratio-16x9">
							<?php the_post_thumbnail('large', ['class' => 'img-fluid object-fit-cover w-100 h-100']); ?>
                        </div>
                    </a>
                </div>

                <!-- Text (Title + Excerpt) -->
                <div class="col-12 col-lg-4 d-flex flex-column justify-content-center order-2 order-lg-1">
                    <div class="card-body">
                        <h3 class="card-title">
                            <a href="<?php the_permalink(); ?>" class="text-black text-decoration-none hover-golden">
								<?php the_title(); ?>
                            </a>
                        </h3>
                        <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                    </div>
                    <div class="card-footer text-muted small bg-light border-top">
                        Posted on <?php echo get_the_date(); ?> in <?php the_category(', '); ?>
                    </div>
                </div>
            </div>
        </div>

		<!-- Begin Grid for Remaining Posts -->
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
			<?php else : ?>
				<!-- Remaining Posts: 4 Columns -->
				<div class="col">
					<div class="card h-100">
						<?php if (has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('medium', ['class' => 'card-img-top img-fluid']); ?>
							</a>
						<?php endif; ?>
						<div class="card-body">
							<h5 class="card-title">
								<a href="<?php the_permalink(); ?>" class="text-black text-decoration-none hover-golden">
									<?php the_title(); ?>
								</a>
							</h5>
							<p class="card-text"><?php echo get_the_excerpt(); ?></p>
						</div>
						<div class="card-footer text-muted small">
							Posted on <?php echo get_the_date(); ?> in <?php the_category(', '); ?>
						</div>
					</div>
				</div>
			<?php endif;

			$post_count++;
			endwhile;

			echo '</div>'; // Close grid row
			wp_reset_postdata();
			else :
				echo '<p class="text-center">No posts found in the selected categories.</p>';
			endif;
			?>
		</div>
</section>

<?php get_footer(); ?>
