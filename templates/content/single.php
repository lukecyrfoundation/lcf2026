<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Title and subtitle: center on small, left on md+ -->
	<div class="text-center text-md-start">
		<h1 class="mb-1"><?php the_title(); ?></h1>

		<?php
		$subtitle = get_post_meta(get_the_ID(), 'subtitle', true);
		if ($subtitle) : ?>
			<h2 class="text-muted mb-4"><?php echo esc_html($subtitle); ?></h2>
		<?php endif; ?>
	</div>

	<!-- Featured image: center on small, float right on md+ -->
	<?php if (has_post_thumbnail()) : ?>
		<div class="d-block d-md-none text-center mb-3">
			<?php the_post_thumbnail('medium', ['class' => 'img-fluid rounded']); ?>
		</div>

		<div class="d-none d-md-block float-end ms-4 mb-3" style="max-width: 300px;">
			<?php the_post_thumbnail('medium', ['class' => 'img-fluid rounded']); ?>
		</div>
	<?php endif; ?>

	<div class="post-content clearfix">
		<?php the_content(); ?>
	</div>

</article>