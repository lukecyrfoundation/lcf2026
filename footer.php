<?php
?>
<footer class="bg-dark text-white py-5 mt-4">
    <div class="container">
        <div class="row justify-content-center">
                <!-- Navigation Links -->
                <div class="col-12 col-md-2 text-center text-md-start">
                    <h5 class="text-uppercase mb-3">About</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'road-to-resilience' ) ) ); ?>" class="nav-link text-white">Road to Resilience</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about-us' ) ) ); ?>" class="nav-link text-white">About Us</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'success-stories' ) ) ); ?>" class="nav-link text-white">Success Stories</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'events' ) ) ); ?>" class="nav-link text-white">Events</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-2 text-center text-md-start">
                    <h5 class="text-uppercase mb-3">Resources</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'poetry' ) ) ); ?>" class="nav-link text-white">Poetry</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'blog' ) ) ); ?>" class="nav-link text-white">Blog</a></li>
                        <li><a href="https://www.youtube.com/watch?v=rBb2RJ5n384" target="_blank" class="nav-link text-white">Documentary</a></li>
                        <?php //<li><a href="#" class="nav-link text-white">Shop</a></li> ?>
                    </ul>
                </div>
                <div class="col-12 col-md-2 text-center text-md-start">
                    <h5 class="text-uppercase mb-3">Get Involved</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'donate' ) ) ); ?>" class="nav-link text-white">Donate</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'volunteer' ) ) ); ?>" class="nav-link text-white">Volunteer</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact-us' ) ) ); ?>" class="nav-link text-white">Contact Us</a></li>
                    </ul>
                </div>
            <!-- Footer Message -->
            <div class="col-md-6 text-center d-flex align-items-center justify-content-center fs-2">
                <p class="mb-0"><em>Giving those who have retreated into darkness, a chance to embrace the light.</em></p>
            </div>
        </div>

        <!-- Divider -->
        <hr class="my-4 border-light">

        <!-- Social Media Links -->
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-start mb-2 mb-md-0">
                <p class="mb-0">&copy; 2025 Luke Cyr Foundation. All rights reserved.</p>
                <p class="mb-0"><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'privacy-policy' ) ) ); ?>" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Terms of Use</a></p>
            </div>
            <div class="col-md-4 text-center text-md-end">
                <a href="https://www.facebook.com/thelukecyrfoundation" target="_blank" class="text-white me-2 text-decoration-none fs-4">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.instagram.com/lukecyrfoundation/" target="_blank" class="text-white me-2 text-decoration-none fs-4">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/lukecyrfoundation" target="_blank" class="text-white me-2 text-decoration-none fs-4">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://vimeo.com/lukecyrfoundation" target="_blank" class="text-white text-decoration-none fs-4">
                    <i class="bi bi-vimeo"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>