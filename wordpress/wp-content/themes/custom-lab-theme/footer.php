    </main>
    <footer id="footer">
        <div class="container">
            <div class="row top">
                <div class="col-sm-4">
                    <h4>About Us</h4>
                    <p>Custom WordPress theme for lab assignment.</p>
                </div>
                <div class="col-sm-4">
                    <h4>Quick Links</h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'menu',
                        'container'      => false,
                        'depth'          => 1,
                    ));
                    ?>
                </div>
                <div class="col-sm-4">
                    <h4>Connect</h4>
                    <ul class="social">
                        <li><i class="fa fa-facebook"></i> <a href="#">Facebook</a></li>
                        <li><i class="fa fa-twitter"></i> <a href="#">Twitter</a></li>
                        <li><i class="fa fa-instagram"></i> <a href="#">Instagram</a></li>
                        <li><i class="fa fa-linkedin"></i> <a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="row bottom">
                <div class="col-sm-12">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
