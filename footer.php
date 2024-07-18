    <!-- Footer Start -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2><?php _e('Get in Touch', 'estore'); ?></h2>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                            <p><i class="fa fa-envelope"></i>angel@example.com</p>
                            <p><i class="fa fa-phone"></i>+123-456-7890</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2><?php _e('Follow Us', 'estore'); ?></h2>
                        <div class="contact-info">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2><?php _e('Company Info', 'estore'); ?></h2>
                        <ul>
                            <li><a href="#"><?php _e('About Us', 'estore'); ?></a></li>
                            <li><a href="#"><?php _e('Privacy Policy', 'estore'); ?></a></li>
                            <li><a href="#"><?php _e('Terms & Condition', 'estore'); ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2><?php _e('Purchase Info', 'estore'); ?></h2>
                        <ul>
                            <li><a href="#"><?php _e('Payment Policy', 'estore'); ?></a></li>
                            <li><a href="#"><?php _e('Shipping Policy', 'estore'); ?></a></li>
                            <li><a href="#"><?php _e('Return Policy', 'estore'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row payment align-items-center">
                <div class="col-md-6">
                    <div class="payment-method">
                        <h2><?php _e('We Accept:', 'estore'); ?></h2>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment-method.png" alt="<?php _e('Payment Method', 'estore'); ?>" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment-security">
                        <h2><?php _e('Secured By:', 'estore'); ?></h2>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/godaddy.svg" alt="<?php _e('Payment Security', 'estore'); ?>" />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/norton.svg" alt="<?php _e('Payment Security', 'estore'); ?>" />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ssl.svg" alt="<?php _e('Payment Security', 'estore'); ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    
    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>&copy; <?php echo date('Y'); ?> <a href="#"><?php bloginfo('name'); ?></a>. <?php _e('All Rights Reserved', 'estore'); ?></p>
                </div>

                <div class="col-md-6 template-by">
                    <p><?php _e('Designed By', 'estore'); ?> <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->      
    
    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/easing/easing.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/slick/slick.min.js"></script>
    
    <!-- Template Javascript -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

    <?php wp_footer(); ?>
</body>
</html>
