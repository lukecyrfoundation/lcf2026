<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
<section class="bg-navy">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center">
            <div class="col-12 order-0 d-md-none">
                <div class="d-flex justify-content-between align-items-center border-bottom border-white">
                    <div class="logo py-2">
                        <a href="<?php echo home_url(); ?>">
                            <?php include('lib/img/logo_svg.php'); ?>
                        </a>
                    </div>
                    <div class="text-end">
                        <a class="text-decoration-none" href="<?php echo esc_url( get_permalink( get_page_by_path( 'donate' ) ) ); ?>">
                            <div class="header-donate px-3 py-2 d-flex align-items-center justify-content-center">
                                DONATE
                            </div>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-block btn-menu px-5 py-3 d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list me-2"></i> Menu
                    </button>
                </div>
            </div>

            <div class="col-md-3 col-12 order-0 order-md-1 d-none d-md-block mb-2 mb-md-0">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
					<?php include('lib/img/logo_svg.php'); ?>
                    </a>
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 col-lg-7 order-2">
                <nav class="nav justify-content-end pe-4">
                    <a class="nav-link header-nav" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact-us' ) ) ); ?>">Contact Us <i class="pl-1 bi bi-envelope-fill"></i></a>
                    <a class="nav-link header-nav" href="<?php echo esc_url( get_permalink( get_page_by_path( 'blog' ) ) ); ?>">Blog <i class="pl-1 bi bi-pencil-square"></i></a>
                    <a class="nav-link header-nav" href="https://www.youtube.com/watch?v=rBb2RJ5n384" target="_blank">Documentary <i class="pl-1 bi bi-film"></i></a>
                    <?php //<a class="nav-link header-nav pe-lg-1" href="#">Shop <i class="pl-1 bi bi-cart-fill"></i></a> ?>
                </nav>
            </div>
            <nav class="col-12 col-md-6 collapse navbar-collapse justify-content-center order-2" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link second-nav-special mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'road-to-resilience' ) ) ); ?>">Road to Resilience</a></li>
                    <li class="nav-item"><a class="nav-link header-nav mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'about-us' ) ) ); ?>">About Us</a></li>
                    <li class="nav-item"><a class="nav-link header-nav mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'success-stories' ) ) ); ?>">Success Stories</a></li>
                    <li class="nav-item"><a class="nav-link header-nav mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'events' ) ) ); ?>">Events</a></li>
                    <li class="nav-item"><a class="nav-link header-nav mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'poetry' ) ) ); ?>">Poetry</a></li>
                    <li class="nav-item"><a class="nav-link header-nav mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'blog' ) ) ); ?>">Blog</a></li>
                    <li class="nav-item"><a class="nav-link header-nav mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact-us' ) ) ); ?>">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link header-nav mx-3" href="https://www.youtube.com/watch?v=rBb2RJ5n384" target="_blank">Documentary</a></li>
                    <?php //<li class="nav-item"><a class="nav-link header-nav mx-3" href="#">Shop</i></a></li> ?>
                </ul>
            </nav>
            <div class="col-md-3 col-lg-2 col-12 text-end order-3 d-none d-md-block">
                <a class="text-decoration-none" href="<?php echo esc_url( get_permalink( get_page_by_path( 'donate' ) ) ); ?>">
                    <div class="header-donate px-5 py-4 h-100 d-flex align-items-center justify-content-center">
                        DONATE
                    </div>
                </a>
            </div>
        </header>
    </div>
</section>
<section class="bg-grey d-none d-md-block">
    <div class="container px-md-0">
        <nav class="nav justify-content-center align-items-center">
            <a class="nav-link second-nav mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'about-us' ) ) ); ?>">About Us</a>
            <a class="nav-link second-nav mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'success-stories' ) ) ); ?>">Success Stories</a>
            <a class="nav-link second-nav mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'events' ) ) ); ?>">Events</a>
            <a class="nav-link second-nav mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'poetry' ) ) ); ?>">Poetry</a>
            <a class="nav-link second-nav-special bg-navy py-3 mx-3" href="<?php echo esc_url( get_permalink( get_page_by_path( 'road-to-resilience' ) ) ); ?>">Road to Resilience</a>
        </nav>
    </div>
</section>