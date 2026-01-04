<article id="post-<?php the_ID(); ?>" <?php post_class( 'poem-content mx-auto mb-5' ); ?>>

	<?php
	// Get media (video or image)
	$video_url   = get_post_meta( get_the_ID(), 'poem_video_url', true );
	$has_image   = has_post_thumbnail();
	$has_video   = ! empty( $video_url );
	$has_media   = $has_video || $has_image;

	// Video embed code
	$embed_code = '';
	if ( $has_video ) {
		global $wp_embed;
		$embed_code = $wp_embed->autoembed( esc_url( $video_url ) );
	}
	?>

	<?php
	$title_classes = $has_media ? 'text-center text-lg-start' : 'text-center';
	?>
    <header class="page-header mb-4">
        <h1 class="page-title <?php echo $title_classes; ?>"><?php the_title(); ?></h1>
    </header>
    <!-- .page-header -->

	<?php if ( $has_media ) : ?>
        <div class="row align-items-start g-4 mb-5">
            <div class="col-lg-4 text-center text-lg-start">
                <div class="poem-text">
			        <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-8 text-center text-lg-end">
				<?php if ( $has_video && strpos( $embed_code, '<iframe' ) !== false ) : ?>
                    <div class="poem-video ratio ratio-16x9 mb-3"><?php echo $embed_code; ?></div>
				<?php elseif ( $has_image ) : ?>
                    <div class="poem-image mb-3">
						<?php the_post_thumbnail( 'large', [ 'class' => 'img-fluid rounded', 'alt' => get_the_title() ] ); ?>
                    </div>
				<?php endif; ?>
            </div>
        </div>
	<?php else : ?>
        <div class="text-center mb-5">
            <div class="poem-text">
				<?php the_content(); ?>
            </div>
        </div>
	<?php endif; ?>

	<?php
	// Optional discussion field
	$discussion = get_post_meta( get_the_ID(), 'poem_discussion', true );
	if ( ! empty( $discussion ) ) : ?>
        <div class="poem-discussion mt-5">
            <h2 class="h5 text-start mb-2">Discussion</h2>
            <p class="text-start text-muted"><?php echo esc_html( $discussion ); ?></p>
        </div>
	<?php endif; ?>

</article>
