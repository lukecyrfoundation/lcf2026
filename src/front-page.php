<?php get_header(); ?>

<!-- Hero Section -->
<section class="bg-white font-montserrat">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1 class="display-5">Shining a Light on Mental Health</h1>
                <p class="">We believe in supporting veterans, first responders, and individuals affected by PTSD,
                    recognizing the strength it takes to seek help and the importance of being there when they do.
                    Through powerful initiatives, meaningful community partnerships, and your impactful donations, we
                    strive to provide resources, foster resilience, and inspire hope.</p>
                <p class="fs-5">Together, we can transform lives and build a <br/> brighter future for those who have
                    given so much.</p>
                <div class="mt-4">
                    <h2 class="fs-2 fw-semibold">Join Us in Making a Difference</h2>
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-2"></div> <!-- Spacer Column -->

                        <div class="col-12 col-lg-3 mb-xl-0 mb-3">
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'donate' ) ) ); ?>" class="text-decoration-none">
                                <div class="bg-golden text-white text-center fs-5 py-3 rounded">
                                    Donate
                                </div>
                            </a>
                        </div>

                        <div class="col-1"></div> <!-- Spacer Column -->

                        <div class="col-12 col-lg-3 mb-xl-0 mb-3">
                            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'subscribe' ) ) ); ?>" class="text-decoration-none">
                                <div class="bg-golden text-white text-center fs-5 py-3 rounded">
                                    Subscribe
                                </div>
                            </a>
                        </div>

                        <div class="col-2"></div> <!-- Spacer Column -->
                    </div>

                </div>
            </div>
            <div class="col-md-5 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/lib/img/hero_image.png" alt="Feature Image"
                     class="img-fluid">
            </div>
        </div>
    </div>
</section>


<!-- Action Story Section -->
<section class="bg-navy py-5">
    <div class="container px-5">
        <h4 class="text-white text-center pb-3">Who We Support</h4>
        <div
                id="newsCarousel"
                class="carousel slide"
                data-bs-ride="carousel"
        >
            <div class="carousel-inner">
				<?php
				$latest_posts = new WP_Query( array(
					'posts_per_page' => 9,
					'post_type'      => 'post',
					'post_status'    => 'publish',
					'category_name'  => 'supported'
				) );
				if ( $latest_posts->have_posts() ) :
					$active_class = 'active';
					while ( $latest_posts->have_posts() ) : $latest_posts->the_post();
						if ( $latest_posts->current_post % 4 == 0 ) : ?>
                            <div class="carousel-item <?php echo $active_class; ?>">
                            <div class="row">
						<?php endif; ?>
                        <div class="col-6 col-md-3 mb-4">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
										<?php if ( has_post_thumbnail() ) : ?>
                                            <div class="card-img-top">
												<?php the_post_thumbnail( 'small', [ 'class' => 'img-fluid' ] ); ?>
                                            </div>
										<?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
						<?php if ( $latest_posts->current_post % 4 == 3 || $latest_posts->current_post + 1 == $latest_posts->post_count ) : ?>
                            </div>
                            </div>
							<?php $active_class = ''; ?>
						<?php endif;
					endwhile;
					wp_reset_postdata();
				endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Success Story Section -->
<section class="bg-grey py-5">
    <div class="container">
        <h4 class="text-white text-center pb-3">Success Stories</h4>
        <div
                id="newsCarousel"
                class="carousel slide"
                data-bs-ride="carousel"
        >
            <div class="carousel-inner">
				<?php
				$latest_posts = new WP_Query( array(
					'posts_per_page' => 8,
					'post_type'      => 'post',
					'post_status'    => 'publish',
					'category_name'  => 'success-story'
				) );
				if ( $latest_posts->have_posts() ) :
					$active_class = 'active';
					while ( $latest_posts->have_posts() ) : $latest_posts->the_post();
						if ( $latest_posts->current_post % 4 == 0 ) : ?>
                            <div class="carousel-item <?php echo $active_class; ?>">
                            <div class="row">
						<?php endif; ?>
                        <div class="col-6 col-md-3 mb-4">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
										<?php if ( has_post_thumbnail() ) : ?>
                                            <div class="card-img-top">
												<?php the_post_thumbnail( 'small', [ 'class' => 'img-fluid' ] ); ?>
                                            </div>
										<?php endif; ?>
                                        <h5 class="card-title title-center mt-2"><?php the_title(); ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>

						<?php if ( $latest_posts->current_post % 4 == 3 || $latest_posts->current_post + 1 == $latest_posts->post_count ) : ?>
                            </div>
                            </div>
							<?php $active_class = ''; ?>
						<?php endif;
					endwhile;
					wp_reset_postdata();
				endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-5">
    <div class="container text-center">
        <div class="card mx-auto" style="max-width: 600px">
            <div class="card-body bg-grey">
                <h5 class="card-title">Subscribe to Our Vision Poems Newsletter</h5>
                <form action="https://lukecyrfoundation.us7.list-manage.com/subscribe/post?u=81cf7b275f37c3cd02081f579&amp;id=0a61df6339&amp;f_id=004956e0f0"
                      method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                      target="_blank">
                    <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group mb-3">
                            <input type="email" name="EMAIL" class="required email form-control" id="mce-EMAIL" required
                                   placeholder="Enter your email">
                        </div>
                        <div class="mc-field-group mb-3 d-flex">
                            <input type="text" name="FNAME" class="required text form-control me-2" id="mce-FNAME"
                                   required placeholder="First Name">
                            <input type="text" name="LNAME" class="required text form-control" id="mce-LNAME" required
                                   placeholder="Last Name">
                        </div>
                        <div class="mc-field-group mb-3">

                        </div>


                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display: none;"></div>
                            <div class="response" id="mce-success-response" style="display: none;"></div>
                        </div>

                        <div aria-hidden="true" style="position: absolute; left: -5000px;">
                            <input type="text" name="b_81cf7b275f37c3cd02081f579_0a61df6339" tabindex="-1" value="">
                        </div>

                        <div class="clear d-flex justify-content-between align-items-center">
                            <p class="mb-0"><a
                                        href="https://us7.campaign-archive.com/home/?u=81cf7b275f37c3cd02081f579&amp;id=0a61df6339"
                                        target="_blank">View previous campaigns</a></p>
                            <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn bg-golden"
                                   value="Subscribe">
                        </div>
                    </div>
                </form>
                <script type="text/javascript"
                        src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
                <script type="text/javascript">(function ($) {
                        window.fnames = new Array();
                        window.ftypes = new Array();
                        fnames[0] = 'EMAIL';
                        ftypes[0] = 'email';
                        fnames[1] = 'FNAME';
                        ftypes[1] = 'text';
                        fnames[2] = 'LNAME';
                        ftypes[2] = 'text';
                        fnames[3] = 'ADDRESS';
                        ftypes[3] = 'address';
                        fnames[4] = 'PHONE';
                        ftypes[4] = 'phone';
                        fnames[5] = 'BIRTHDAY';
                        ftypes[5] = 'birthday';
                        fnames[6] = 'COMPANY';
                        ftypes[6] = 'text';
                    }(jQuery));
                    var $mcj = jQuery.noConflict(true);</script>
            </div>
        </div>
    </div>
</section>

<!-- News Carousel Section -->
<section class="bg-navy py-5">
    <div class="container">
        <h4 class="text-white text-center pb-3">Latest News</h4>
        <div
                id="newsCarousel"
                class="carousel slide"
                data-bs-ride="carousel"
        >
            <div class="carousel-inner">
				<?php
				$latest_posts = new WP_Query( array(
					'posts_per_page' => 8,
					'post_type'      => 'post',
					'post_status'    => 'publish',
					'category_name'  => 'news'
				) );
				if ( $latest_posts->have_posts() ) :
					$active_class = 'active';
					while ( $latest_posts->have_posts() ) : $latest_posts->the_post();
						if ( $latest_posts->current_post % 4 == 0 ) : ?>
                            <div class="carousel-item <?php echo $active_class; ?>">
                            <div class="row">
						<?php endif; ?>
                        <div class="col-6 col-md-3 mb-4">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                <div class="card h-100">
                                    <div class="card-body">
										<?php if ( has_post_thumbnail() ) : ?>
                                            <div class="card-img-top">
												<?php the_post_thumbnail( 'small', [ 'class' => 'img-fluid' ] ); ?>
                                            </div>
										<?php endif; ?>
                                        <h5 class="card-title pt-2"><?php the_title(); ?></h5>
                                        <p class="card-text d-none d-xl-block"><?php echo strip_tags( strip_shortcodes( get_the_excerpt() ) ); ?></p>


                                    </div>
                                </div>
                            </a>
                        </div>
						<?php if ( $latest_posts->current_post % 4 == 3 || $latest_posts->current_post + 1 == $latest_posts->post_count ) : ?>
                            </div>
                            </div>
							<?php $active_class = ''; ?>
						<?php endif;
					endwhile;
					wp_reset_postdata();
				endif; ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
